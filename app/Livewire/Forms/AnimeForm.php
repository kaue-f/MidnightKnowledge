<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class AnimeForm extends Form
{
    #[Validate('required', message: 'O título é obrigatório.')]
    #[Validate('min:3', message: 'O título deve conter no mínimo 3 caracteres.')]
    #[Validate('max:100', message: 'O título deve conter no máximo 100 caracteres.')]
    #[Validate('unique:animes,title', message: 'Já existe um anime cadastrado com este título.')]
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

    #[Validate('nullable')]
    #[Validate('integer', message: 'Informe um número inteiro para a quantidade de episódios.')]
    public ?int $episodes = null;

    #[Validate('nullable')]
    #[Validate('integer', message: 'Informe um número inteiro para a temporada atual.')]
    public ?int $season = null;

    #[Validate('nullable')]
    #[Validate('integer', message: 'Informe um número inteiro para a quantidade de temporadas.')]
    public ?int $season_count = null;

    #[Validate(rule: 'nullable')]
    #[Validate('integer', message: 'Informe um número inteiro para a quantidade de OVAs e Especiais.')]
    public ?int $ova_special_count = null;

    #[Validate('nullable')]
    #[Validate('integer', message: 'Informe um número inteiro para a quantidade de filmes.')]
    public ?int $movie_count = null;

    #[Validate('nullable')]
    public string $type = '';

    #[Validate('nullable')]
    public string $release_date = '';

    public function resetForm()
    {
        $this->reset();
    }
}
