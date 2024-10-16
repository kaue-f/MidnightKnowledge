<?php

namespace App\DTO;

class SortByDTO
{
    public array $assortment = [
        ['id' => 'title|asc', 'name' => 'Título crescente'],
        ['id' => 'title|desc', 'name' => 'Título decrescente'],
        ['id' => 'rating|asc', 'name' => 'Classificação crescente'],
        ['id' => 'rating|desc', 'name' => 'Classificação decrescente'],
        ['id' => 'created_at|asc', 'name' => 'Adicionado recentemente'],
        ['id' => 'created_at|desc', 'name' => 'Mais antigo adicionado'],
        ['id' => 'release_date|asc', 'name' => 'Ano crescente'],
        ['id' => 'release_date|desc', 'name' => 'Ano decrescente'],
    ];
}
