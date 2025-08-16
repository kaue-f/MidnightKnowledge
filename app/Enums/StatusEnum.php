<?php

namespace App\Enums;

enum StatusEnum: string
{
    case PROGRESS = 'in_progress';
    case PLANNED = 'planned';
    case COMPLETED = 'completed';
    case PAUSED = 'paused';
    case DROPPED = 'dropped';

    /**
     * Get the array representation of the enum.
     *
     * @return array
     */
    public static function array(): array
    {
        return array_combine(
            array_map(fn($status) => $status->value, self::cases()),
            array_map(fn($status) => $status->description(), self::cases())
        );
    }

    /**
     * Get the label for the status.
     *
     * @return string
     */
    public function description(): ?string
    {
        return match ($this) {
            self::PROGRESS => __('enums.statusEnum.label.in_progress'),
            self::PLANNED => __('enums.statusEnum.label.planned'),
            self::COMPLETED => __('enums.statusEnum.label.completed'),
            self::PAUSED => __('enums.statusEnum.label.paused'),
            self::DROPPED => __('enums.statusEnum.label.dropped'),
            default => "",
        };
    }

    /**
     * Get the icon for the status.
     *
     * @return string|null
     */
    public function icon(): ?string
    {
        return match ($this) {
            self::PROGRESS => 's-rocket-launch',
            self::PLANNED => 's-bookmark',
            self::COMPLETED => 's-sparkles',
            self::PAUSED => 's-pause',
            self::DROPPED => 's-no-symbol',
            default => 's-minus',
        };
    }
}
