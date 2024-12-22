<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class GameDTO extends Form
{
    #[Validate('required', message: 'O título é obrigatório.')]
    #[Validate('min:3', message: 'O título deve conter no mínimo 3 caracteres.')]
    #[Validate('max:100', message: 'O título deve conter no máximo 100 caracteres.')]
    #[Validate('unique:games,title', message: 'Já existe um jogo cadastrado com este título.')]
    public $title;

    #[Validate('nullable')]
    #[Validate('image', message: 'O arquivo enviado deve ser uma imagem válida.')]
    #[Validate('max:2560', message: 'A imagem deve ter no máximo 2.50MB.')]
    #[Validate('mimes:jpg,jpeg,png', message: 'Imagem deve ser no formato: jpg, jpeg ou png.')]
    public $image;

    #[Validate('required', message: 'Selecione pelo menos um gênero.')]
    #[Validate('max:20', message: 'Você pode selecionar no máximo 20 gêneros.')]
    public $genres = [];

    #[Validate('nullable')]
    #[Validate('min:20', message: 'A sinopse deve conter no mínimo 20 caracteres.')]
    #[Validate('max:500', message: 'A sinopse deve conter no máximo 500 caracteres.')]
    public $synopsis;

    #[Validate('required', message: 'A classificação etária é obrigatória.')]
    public $classification;

    #[Validate('nullable')]
    public $duration;

    #[Validate('nullable')]
    public $release_date;

    #[Validate('nullable')]
    #[Validate('min:3', message: 'O nome da desenvolvedora deve conter no mínimo 3 caracteres.')]
    #[Validate('max:50', message: 'O nome da desenvolvedora deve conter no máximo 50 caracteres.')]
    public $developed_by;

    #[Validate('required', message: 'Selecione pelo menos uma plataforma.')]
    #[Validate('max:20', message: 'Você pode selecionar no máximo 20 plataformas.')]
    public $platforms = [];
}
