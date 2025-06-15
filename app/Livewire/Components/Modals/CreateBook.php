<?php

namespace App\Livewire\Components\Modals;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\BookForm;
use Illuminate\Support\Collection;
use Livewire\Attributes\Modelable;
use App\Services\Management\BookService;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateBook extends Component
{
    use WithFileUploads;
    public ?User $user;
    public BookForm $bookForm;
    public Collection $genres;
    public array $classifications;
    public array $authors;
    public array $series;
    public array $publishedBy;
    public array $formats;
    #[Modelable]
    public bool $modalBook = false;
    public array $config = [
        'dateFormat' => 'Y-m-d',
        'altFormat' => 'd F Y',
        'locale' => 'pt',
    ];
    public array $configSynopsis = [
        'inputStyle' => 'contenteditable',
        'toolbar' => ['heading', 'bold', 'italic'],
        'statusbar' => false,
        'maxHeight' => '125px',
        'uploadImage' => false,
        'placeholder' => 'Sinopse do livro...',
        'status' => false,
        'forceSync' => true,
        'plugins' => 'autoresize',
    ];

    public function save(BookService $book)
    {
        $this->validate();
        try {
            $book->create($this->bookForm, $this->user);
            $this->close();
        } catch (\Throwable $th) {
            notyf()->error("Falha no cadastramento do livro inserido. Veriique os dados e tente novamente.");
        }
    }

    public function close()
    {
        $this->bookForm->resetForm();
        $this->modalBook = false;
    }
}
