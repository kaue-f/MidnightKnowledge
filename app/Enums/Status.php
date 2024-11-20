<?php

namespace App\Enums;

enum Status: string
{
    case Progresso = 'Em Progresso';
    case Lista = 'Lista de Desejos';
    case Finalizado = 'Finalizado';
    case Pausado = 'Pausado';
    case Dropado = 'Dropado';

    public static function array(): array
    {
        return array_combine(
            array_map(fn($status) => $status->name, self::cases()),
            array_map(fn($status) => $status->value, self::cases())
        );
    }
}
