<?php

namespace App\Enums;

enum Role: string
{
    case MEMBER = 'Membro';
    case VIP = 'VIP';

    public static function set($value): string
    {
        return match ($value) {
            Role::MEMBER->name => Role::MEMBER->value,
            Role::VIP->name => Role::VIP->value,
            default => "",
        };
    }
}
