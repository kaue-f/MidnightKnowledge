<?php

return [
    'label' => [
        'nickname' => 'Nickname',
        'nickname_hint' => 'The nickname can only contain letters, numbers, and simple hyphens (cannot start or end with a hyphen).',
        'email' => 'Email',
        'password' => 'Password',
        'password_hint' => 'The password must be at least 8 characters long and include a number, a lowercase letter, an uppercase letter, and a special character.',
        'confirm_password' => 'Confirm Password',
        'register' => 'Register',
    ],

    'placeholder' => [
        'nickname' => 'Enter your nickname',
        'email' => 'Enter your email',
        'password' => 'Enter your password',
        'confirm_password' => 'Confirm your password'
    ],

    'or' => 'Or',
    'login' => 'Log in',

    'form' => [
        'nickname' => [
            'required' => 'Nickname is required.',
            'min' => 'Nickname must be at least :min characters long.',
            'max' => 'Nickname cannot exceed :max characters.',
            'unique' => 'This nickname is already taken.'
        ],

        'email' => [
            'required' => 'Email is required.',
            'email' => 'Invalid email format.',
            'unique' => 'This email is already registered.'
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
        'success' => 'To access your account, please check your email and confirm your registration.',
        'error' => 'Error creating your account. Please check your details and try again.',
        'warning' => 'Failed to create your account. Please check your details and try again.',
    ],
];
