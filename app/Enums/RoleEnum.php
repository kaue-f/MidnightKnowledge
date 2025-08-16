<?php

namespace App\Enums;

enum RoleEnum: string
{
    case MANAGER = 'manager';
    case MODERATOR = 'moderator';
    case CONTRIBUTOR = 'contributor';
    case VIP = 'vip';
    case MEMBER = 'member';

    /**
     * Get the array representation of the enum.
     *
     * @return array
     */
    public static function array(): array
    {
        return array_combine(
            array_map(fn($role) => $role->value, self::cases()),
            array_map(fn($role) => $role->label(), self::cases())
        );
    }

    /**
     * Get the label for the role.
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::MANAGER => __('enums.roleEnum.label.manager'),
            self::MODERATOR => __('enums.roleEnum.label.moderator'),
            self::CONTRIBUTOR => __('enums.roleEnum.label.contributor'),
            self::VIP => __('enums.roleEnum.label.vip'),
            self::MEMBER => __('enums.roleEnum.label.member'),
        };
    }

    /**
     * Get the description for the role.
     *
     * @return string
     */
    public function description(): string
    {
        return match ($this) {
            self::MANAGER => __('enums.roleEnum.description.manager'),
            self::MODERATOR => __('enums.roleEnum.description.moderator'),
            self::CONTRIBUTOR => __('enums.roleEnum.description.contributor'),
            self::VIP => __('enums.roleEnum.description.vip'),
            self::MEMBER => __('enums.roleEnum.description.member'),
        };
    }
}
