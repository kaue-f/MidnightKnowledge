<?php

namespace App\Enums;

enum RelationTypeEnum: string
{
    case ADAPTATION   = 'adaptation';
    case SEQUEL       = 'sequel';
    case PREQUEL      = 'prequel';
    case INSPIRATION  = 'inspiration';
    case SHARED_UNIVERSE = 'shared_universe';

    public function label(): string
    {
        return match ($this) {
            self::ADAPTATION => __('enums.RelationTypeEnum.label.adaptation'),
            self::SEQUEL => __('enums.RelationTypeEnum.label.sequel'),
            self::PREQUEL => __('enums.RelationTypeEnum.label.prequel'),
            self::INSPIRATION => __('enums.RelationTypeEnum.label.inspiration'),
            self::SHARED_UNIVERSE => __('enums.RelationTypeEnum.label.shared_universe'),
        };
    }
}
