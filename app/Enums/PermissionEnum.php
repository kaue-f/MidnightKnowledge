<?php

namespace App\Enums;

enum PermissionEnum: string
{
    case REPORT_REVIEW_USERS = 'report_review_users';
    case REPORT_REVIEW_COMMENTS = 'report_review_comments';
    case REPORT_REVIEW_CONTENTS = 'report_review_contents';
    case CONTENT_REVIEW_NEW = 'content_review_new';
    case CONTENT_REVIEW_UPDATE = 'content_review_update';
    case GRANT_BAN_USER = 'grant_ban_user';
    case BYPASS_CONTENT_REVIEW = 'bypass_content_review';
    case SUBMIT_CONTENT_FOR_REVIEW = 'submit_content_for_review';
    case UPDATE_PROFILE = 'update_profile';
    case BAN_COMMENT = 'ban_comment';
    case BAN_CONTENT = 'ban_content';
    case REVOCATION_DENUNCIATION = 'revocation_denunciation';
    case SUSPENDED_ACCOUNT = 'suspended_account';

    public function label(): string
    {
        return match ($this) {
            self::REPORT_REVIEW_USERS => __('permissionEnum.label.report_review_users'),
            self::REPORT_REVIEW_COMMENTS => __('permissionEnum.label.report_review_comments'),
            self::REPORT_REVIEW_CONTENTS => __('permissionEnum.label.report_review_contents'),
            self::CONTENT_REVIEW_NEW => __('permissionEnum.label.content_review_new'),
            self::CONTENT_REVIEW_UPDATE => __('permissionEnum.label.content_review_update'),
            self::GRANT_BAN_USER => __('permissionEnum.label.grant_ban_user'),
            self::BYPASS_CONTENT_REVIEW => __('permissionEnum.label.bypass_content_review'),
            self::SUBMIT_CONTENT_FOR_REVIEW => __('permissionEnum.label.submit_content_for_review'),
            self::UPDATE_PROFILE => __('permissionEnum.label.update_profile'),
            self::BAN_COMMENT => __('permissionEnum.label.ban_comment'),
            self::BAN_CONTENT => __('permissionEnum.label.ban_content'),
            self::REVOCATION_DENUNCIATION => __('permissionEnum.label.revocation_denunciation'),
            self::SUSPENDED_ACCOUNT => __('permissionEnum.label.suspended_account'),
        };
    }
}
