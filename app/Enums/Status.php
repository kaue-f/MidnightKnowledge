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


    public function getIcon(): ?string
    {
        return match ($this) {
            self::PROGRESSO => 's-rocket-launch',
            self::LISTA => 's-bookmark',
            self::FINALIZADO => 's-sparkles',
            self::PAUSADO => 's-pause',
            self::DROPADO => 's-no-symbol',
            default => 's-minus',
        };
    }
}
