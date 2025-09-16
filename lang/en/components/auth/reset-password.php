<?php

return [
    'title' => 'Password Reset',

    'label' => [
        'email' => 'Email',
        'password' => 'New password',
        'password_hint' => 'The password must be at least 8 characters long and include a number, a lowercase letter, an uppercase letter, and a special character.',
        'confirm_password' => 'Confirm new password',
        'reset' => 'Password reset',
    ],

    'placeholder' => [
        'password' => 'Enter your new password',
        'confirm_password' => 'Enter confirm new password'
    ],

    'form' => [
        'email' => [
            'required' => 'Email is required.',
            'email' => 'Invalid email format.',
        ],

        'password' => [
            'required' => 'Password is required.',
            'min' => 'Your password must be at least :min characters long.',
            'max' => 'Your password cannot exceed :max characters.',
            'regex_lowercase' => 'Your password must contain at least one lowercase letter.',
            'regex_uppercase' => 'Your password must contain at least one uppercase letter.',
            'regex_number' => 'Your password must contain at least one number.',
            'regex_special_character' => 'Your password must contain at least one special character.',
            'confirmed' => 'Password and confirmation must combine',
        ],
    ],

    'messages' => [
        'reset' => 'Your password has been successfully redefined!',
        'error' => 'It was not possible to redefine your password. Try again later.'
    ],
];
