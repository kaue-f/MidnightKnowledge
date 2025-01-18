<?php

namespace App\Enums;

enum Roles: string
{
    case Member = 'Membro';
    case VIP = 'VIP';

    public static function set($value): string
    {
        return match ($value) {
            Roles::Member->name => Roles::Member->value,
            Roles::VIP->name => Roles::VIP->value,
            default => "",
        };
    }
}
