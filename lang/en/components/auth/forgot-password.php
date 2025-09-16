<?php

return [
    'title' => 'Request Password Reset',
    'subtitle' => 'Enter your registered email and we’ll send instructions to reset your password.',
    'label' => 'Registered email',
    'placeholder' => 'Enter your email',
    'send' => 'Send',
    'return' => 'Return',

    'form' => [
        'email' => [
            'required' => 'Email is required.',
            'email' => 'Invalid email format.',
        ]
    ],

    'messages' => [
        'sent' => 'A password reset link has been sent to your email, if it is registered in our system.',
        'error' => 'Unable to send the password reset link. Please try again later.',
    ],
];
