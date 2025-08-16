<?php

namespace App\Enums;

enum ProfileVisibilityEnum: string
{
    case PUBLIC = 'public';
    case PRIVATE = 'private';
    case FOLLOWERS = 'followers';
    case SUSPENDED = 'suspended';

    /**
     * Get the label for the profile visibility.
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::PUBLIC => __('enums.profileVisibilityEnum.label.public'),
            self::PRIVATE => __('enums.profileVisibilityEnum.label.private'),
            self::FOLLOWERS => __('enums.profileVisibilityEnum.label.followers'),
            self::SUSPENDED => __('enums.profileVisibilityEnum.label.suspended'),
        };
    }

    /**
     * Get the description for the profile visibility.
     *
     * @return string
     */
    public function description(): string
    {
        return match ($this) {
            self::PUBLIC => __('enums.profileVisibilityEnum.description.public'),
            self::PRIVATE => __('enums.profileVisibilityEnum.description.private'),
            self::FOLLOWERS => __('enums.profileVisibilityEnum.description.followers'),
            self::SUSPENDED => __('enums.profileVisibilityEnum.description.suspended'),
        };
    }
}
