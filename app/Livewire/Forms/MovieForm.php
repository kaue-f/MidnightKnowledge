<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class MovieForm extends Form
{
    #[Validate('required', message: 'O título é obrigatório.')]
    #[Validate('min:3', message: 'O título deve conter no mínimo 3 caracteres.')]
    #[Validate('max:100', message: 'O título deve conter no máximo 100 caracteres.')]
    #[Validate('unique:movies,title', message: 'Já existe um filme cadastrado com este título.')]
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
    #[Validate('max:1500', message: 'A sinopse deve conter no máximo 1500 caracteres.')]
    public string $synopsis = '';

    #[Validate('required', message: 'A classificação etária é obrigatória.')]
    public string $classification = '';

    #[Validate('date_format:H:i', message: 'A duração deve estar no formato HH:MM.')]
    #[Validate('nullable')]
    public string $duration = '';

    #[Validate('nullable')]
    public string $release_date = '';

    public function resetForm()
    {
        $this->reset();
    }
}
