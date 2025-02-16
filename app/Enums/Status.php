<?php

namespace App\Enums;

enum Status: string
{
    case PROGRESSO = 'Em Progresso';
    case LISTA = 'Lista de Desejos';
    case FINALIZADO = 'Finalizado';
    case PAUSADO = 'Pausado';
    case DROPADO = 'Dropado';

    public static function array(): array
    {
        return array_combine(
            array_map(fn($status) => $status->name, self::cases()),
            array_map(fn($status) => $status->value, self::cases())
        );
    }

    public static function getValue()
    {
        return array_map(fn($status) => $status->value, self::cases());
    }

    public static function set($value): string
    {
        return match ($value) {
            Status::PROGRESSO->name => Status::PROGRESSO->value,
            Status::LISTA->name => Status::LISTA->value,
            Status::FINALIZADO->name => Status::FINALIZADO->value,
            Status::PAUSADO->name => Status::PAUSADO->value,
            Status::DROPADO->name => Status::DROPADO->value,
            default => "",
        };
    }
}
