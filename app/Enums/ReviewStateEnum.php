<?php

namespace App\Enums;

enum ReviewStateEnum: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case REJECTED = 'rejected';
    case ARCHIVED = 'archived';
    case AUTO_APPROVED = 'auto_approved';
    case NEEDS_REVISION = 'needs_revision';
    case INVALID_REPORT = 'invalid_report';
    case ACTION_TAKEN = 'action_taken';
    case IGNORED = 'ignored';
    case DELETED = 'deleted';

    /**
     * Get the array representation of the enum.
     *
     * @return array
     */
    public static function array(): array
    {
        return array_combine(
            array_map(fn($case) => $case->name, self::cases()),
            array_map(fn($case) => $case->value, self::cases())
        );
    }

    /**
     * Get the label for the enum value.
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::PENDING => __('enums.reviewStateEnum.label.pending'),
            self::APPROVED => __('enums.reviewStateEnum.label.approved'),
            self::REJECTED => __('enums.reviewStateEnum.label.rejected'),
            self::ARCHIVED => __('enums.reviewStateEnum.label.archived'),
            self::AUTO_APPROVED => __('enums.reviewStateEnum.label.auto_approved'),
            self::NEEDS_REVISION => __('enums.reviewStateEnum.label.needs_revision'),
            self::INVALID_REPORT => __('enums.reviewStateEnum.label.invalid_report'),
            self::ACTION_TAKEN => __('enums.reviewStateEnum.label.action_taken'),
            self::IGNORED => __('enums.reviewStateEnum.label.ignored'),
            self::DELETED => __('enums.reviewStateEnum.label.deleted'),
        };
    }
}
