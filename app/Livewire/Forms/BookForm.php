<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class BookForm extends Form
{
    #[Validate('required', message: 'O título é obrigatório.')]
    #[Validate('min:3', message: 'O título deve conter no mínimo 3 caracteres.')]
    #[Validate('max:100', message: 'O título deve conter no máximo 100 caracteres.')]
    #[Validate('unique:books,title', message: 'Já existe um livro cadastrado com este título.')]
    public string $title = '';

    #[Validate('required', message: 'Adicionar uma imagem de capa é obrigatório.')]
    #[Validate('image', message: 'O arquivo enviado deve ser uma imagem válida.')]
    #[Validate('max:2560', message: 'A imagem deve ter no máximo 2.50MB.')]
    #[Validate('mimes:jpg,jpeg,png,webp', message: 'Imagem deve ser no formato: jpg, jpeg, png ou webp.')]
    public $image;

    #[Validate('required', message: 'Selecione pelo menos um gênero.')]
    #[Validate('max:20', message: 'Você pode selecionar no máximo 20 gêneros.')]
    public array $genres = [];

    #[Validate('nullable')]
    #[Validate('min:20', message: 'A sinopse deve conter no mínimo 20 caracteres.')]
    #[Validate('max:2000', message: 'A sinopse deve conter no máximo 2000 caracteres.')]
    public string $synopsis = '';

    #[Validate('nullable')]
    public ?string $classification = null;

    #[Validate('nullable')]
    public string $release_date = '';

    #[Validate('nullable')]
    #[Validate('min:3', message: 'O nome do author deve conter no mínimo 3 caracteres.')]
    #[Validate('max:50', message: 'O nome do author deve conter no máximo 50 caracteres.')]
    public string $author = '';

    #[Validate('nullable')]
    #[Validate('min:3', message: 'O nome da série deve conter no mínimo 3 caracteres.')]
    #[Validate('max:50', message: 'O nome da série deve conter no máximo 50 caracteres.')]
    public string $serie = '';

    #[Validate('nullable')]
    #[Validate('min:3', message: 'O nome da editora deve conter no mínimo 3 caracteres.')]
    #[Validate('max:50', message: 'O nome da editora deve conter no máximo 50 caracteres.')]
    public string $published_by = '';

    #[Validate('nullable')]
    #[Validate('integer', message: 'Informe o capítulo com número inteiro.')]
    public ?int $chapter = null;

    #[Validate('nullable')]
    #[Validate('integer', message: 'Informe a quantidade de páginas com número inteiro.')]
    public ?int $pages = null;

    #[Validate('nullable')]
    #[Validate('integer', message: 'Informe o volume com número inteiro.')]
    public ?int $volume = null;

    #[Validate('nullable')]
    public array $formats = [];

    public function resetForm()
    {
        $this->reset();
    }
}
