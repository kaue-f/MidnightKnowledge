<?php

namespace App\Enums;

enum Status: string
{
    case PROGRESSO = 'in_progress';
    case LISTA = 'planned';
    case FINALIZADO = 'completed';
    case PAUSADO = 'paused';
    case DROPADO = 'dropped';

    public static function array(): array
    {
        return array_combine(
            array_map(fn($status) => $status->value, self::cases()),
            array_map(fn($status) => $status->getDescription(), self::cases())
        );
    }

    public function getDescription(): ?string
    {
        return match ($this) {
            self::PROGRESSO => 'Em Progresso',
            self::LISTA => 'Lista de Desejos',
            self::FINALIZADO => 'Finalizado',
            self::PAUSADO => 'Pausado',
            self::DROPADO => 'Dropado',
            default => "",
        };
    }
}
