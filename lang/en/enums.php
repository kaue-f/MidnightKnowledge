<?php

return [

    /*
     * Enum for content types with labels.
     */
    'contentTypeEnum' => [
        'label' => [
            'anime' => 'Anime',
            'book' => 'Books',
            'cartoon' => 'Cartoons',
            'game' => 'Games',
            'manga' => 'Manga',
            'movie' => 'Movies',
            'serie' => 'Series',
            'movie_serie' => 'Movies/Series',
        ]
    ],

    /*
     * Enum for permissions with labels.
     */
    'permissionEnum' => [
        'label' => [
            'report_review_users' => 'User Report Review',
            'report_review_comments' => 'Comment Report Review',
            'report_review_contents' => 'Content Report Review',
            'content_review_new' => 'New Content Review',
            'content_review_update' => 'Content Update Review',
            'grant_ban_user' => 'Grant User Ban',
            'bypass_content_review' => 'Create Content Without Review',
            'submit_content_for_review' => 'Update Content Without Review',
            'update_profile' => 'Update Profile',
            'ban_comment' => 'Ban for Comment',
            'ban_content' => 'Ban for Content',
            'revocation_denunciation' => 'Denunciation Revocation',
            'suspended_account' => 'Suspended Account',
        ]
    ],

    /*
     * Enum for profile visibility with labels and descriptions.
     */
    'profileVisibilityEnum' => [
        'label' => [
            'public' => 'Public',
            'private' => 'Private',
            'followers' => 'Followers',
            'suspended' => 'Suspended',
        ],
        'description' => [
            'public' => 'Profile visible to everyone.',
            'private' => 'Profile visible only to the owner.',
            'followers' => 'Profile visible only to followers.',
            'suspended' => 'Profile suspended for rule violation.',
        ],
    ],

    /*
     * Enum for review states with labels.
     */
    'reviewStateEnum' => [
        'label' => [
            'pending' => 'Pending Review',
            'approved' => 'Approved',
            'rejected' => 'Rejected',
            'archived' => 'Archived',
            'auto_approved' => 'Auto Approved',
            'needs_revision' => 'Needs Revision',
            'invalid_report' => 'Invalid Report',
            'action_taken' => 'Action Taken',
            'ignored' => 'Ignored',
            'deleted' => 'Deleted',
        ],
    ],

    /*
     * Enum for roles with labels and descriptions.
     */
    'roleEnum' => [
        'label' => [
            'manager' => 'Manager',
            'moderator' => 'Moderator',
            'contributor' => 'Contributor',
            'vip' => 'VIP',
            'member' => 'Member',
        ],
        'description' => [
            'manager' => 'Manages the site and makes important decisions.',
            'moderator' => 'Moderates content and interacts with the community.',
            'contributor' => 'Contributes content and helps with maintenance.',
            'vip' => 'User with exclusive benefits.',
            'member' => 'Regular user.',
        ],
    ],

    /*
     * Enum for statuses with labels.
     */
    'statusEnum' => [
        'label' => [
            'in_progress' => 'In Progress',
            'planned' => 'Wishlist',
            'completed' => 'Completed',
            'paused' => 'Paused',
            'dropped' => 'Dropped',
        ],
    ],
];
