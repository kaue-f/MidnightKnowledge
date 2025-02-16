<?php

namespace App\Enums;

enum Roles: string
{
    case MEMBER = 'Membro';
    case VIP = 'VIP';

    public static function set($value): string
    {
        return match ($value) {
            Roles::MEMBER->name => Roles::MEMBER->value,
            Roles::VIP->name => Roles::VIP->value,
            default => "",
        };
    }
}
