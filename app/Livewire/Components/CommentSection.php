<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Enums\ContentType;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CommentSection extends Component
{
    public $content;
    public ContentType $type;

    #[Validate('required', message: 'O comentário é obrigatório.')]
    #[Validate('min:10', message: 'O comentário deve conter no mínimo 10 caracteres.')]
    #[Validate('max:500', message: 'O comentário deve ter no máximo 500 caracteres.')]
    public string $comment = '';
    public $comments;
    public $posts = [];
    public int $limitPost = 0;
    public bool $isLimit = false;
    public bool $showNewComment = false;
    public array $config = [
        'inputStyle' => 'contenteditable',
        'toolbar' => ['heading', 'bold', 'italic', '|', 'quote', 'unordered-list', 'ordered-list', '|', 'preview'],
        'maxHeight' => '100px',
        'uploadImage' => false,
        'placeholder' => 'Compartilhe sua opinião aqui...',
        'status' => false,
        'forceSync' => true,

    ];
    public $model;

    public function mount()
    {
        $this->model = $this->type->getModelComment();
        $this->getComments();
        $this->loadPosts();
    }

    public function getComments()
    {
        $this->comments = $this->model::with('user:nickname,image,id')
            ->where("{$this->type->value}_id", $this->content->id)
            ->orderByDesc('created_at')
            ->get();
    }

    public function post()
    {
        $this->validate();

        try {
            $post = $this->model::create([
                "{$this->type->value}_id" => $this->content->id,
                'user_id' => Auth::id(),
                'comment' => $this->comment
            ]);

            (!isNullOrEmpty($post))
                ? notyf()->success("Comentário publicado com sucesso.")
                : notyf()->warning("Falha na publicação da comentário. Tente novamente.");

            $this->reset('comment');
            $this->showNewComment = false;

            $this->getComments();
            $this->loadPosts();
        } catch (\Throwable $th) {
            return notyf()->error("Erro ao realizar a publicação do comentário. Tente novamente mais tarde.");
        }
    }

    public function loadPosts()
    {
        if (count($this->posts) >= count($this->comments))
            return $this->isLimit = true;

        $this->limitPost += 5;
        $this->posts = $this->comments->take($this->limitPost);
    }
}
