<?php

namespace App\Enums;

enum Status
{
    case PROGRESSO;
    case LISTA;
    case FINALIZADO;
    case PAUSADO;
    case DROPADO;

    public static function array(): array
    {
        return array_combine(
            array_map(fn($status) => $status->name, self::cases()),
            array_map(fn($status) => self::getDescription($status->name), self::cases())
        );
    }

    public static function getDescription($value): string
    {
        return match ($value) {
            Status::PROGRESSO->name => 'Em Progresso',
            Status::LISTA->name => 'Lista de Desejos',
            Status::FINALIZADO->name => 'Finalizado',
            Status::PAUSADO->name => 'Pausado',
            Status::DROPADO->name => 'Dropado',
            default => "",
        };
    }
}
