<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Services\CommentService;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CommentSection extends Component
{
    public $content;
    public $type;
    #[Validate('required', message: 'O comentário é obrigatório.')]
    #[Validate('min:10', message: 'O comentário deve conter no mínimo 10 caracteres.')]
    #[Validate('max:500', message: 'O comentário deve ter no máximo 500 caracteres.')]
    public string $comment = '';
    public $commentQuery;
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
    private readonly CommentService $commentService;

    public function boot(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function mount()
    {
        $this->commentQuery = $this->commentService->get($this->content, $this->type);
        $this->loadPosts();
    }

    public function post()
    {
        $this->validate();

        try {
            $this->commentService->create($this->comment, $this->content, $this->type, Auth::user());
            $this->reset('comment');
            $this->showNewComment = false;

            $this->commentQuery = $this->commentService->get($this->content, $this->type);
            $this->loadPosts();
        } catch (\Throwable $th) {
            return notyf()->error("Erro ao realizar a publicação do comentário. Tente novamente mais tarde.");
        }
    }

    public function loadPosts()
    {
        if (count($this->posts) >= count($this->commentQuery))
            return $this->isLimit = true;

        $this->limitPost += 5;
        $this->posts = $this->commentQuery->take($this->limitPost);
    }
}
