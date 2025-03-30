<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class GameForm extends Form
{
    #[Validate('required', message: 'O título é obrigatório.')]
    #[Validate('min:3', message: 'O título deve conter no mínimo 3 caracteres.')]
    #[Validate('max:100', message: 'O título deve conter no máximo 100 caracteres.')]
    #[Validate('unique:games,title', message: 'Já existe um jogo cadastrado com este título.')]
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
    #[Validate('max:500', message: 'A sinopse deve conter no máximo 500 caracteres.')]
    public string $synopsis = '';

    #[Validate('required', message: 'A classificação etária é obrigatória.')]
    public string $classification = '';

    #[Validate('integer', message: 'A duração só permitir valores numérico.')]
    #[Validate('nullable')]
    public string $duration = '';

    #[Validate('nullable')]
    public string $release_date = '';

    #[Validate('nullable')]
    #[Validate('min:3', message: 'O nome da desenvolvedora deve conter no mínimo 3 caracteres.')]
    #[Validate('max:50', message: 'O nome da desenvolvedora deve conter no máximo 50 caracteres.')]
    public string $developed_by = '';

    #[Validate('required', message: 'Selecione pelo menos uma plataforma.')]
    #[Validate('max:20', message: 'Você pode selecionar no máximo 20 plataformas.')]
    public array $platforms = [];

    public function resetForm()
    {
        $this->reset();
    }
}
