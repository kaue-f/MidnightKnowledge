<?php

return [
    'title' => 'Redefinir senha',

    'label' => [
        'email' => 'E-mail',
        'password' => 'Nova senha',
        'password_hint' => 'A senha deve ter no mínimo 8 incluindo número, letra minúscula, letra maiúscula e caractere especial.',
        'confirm_password' => 'Confirmar nova senha',
        'reset' => 'Redefinir senha',
    ],

    'placeholder' => [
        'password' => 'Digite sua nova senha',
        'confirm_password' => 'Confirme sua nova senha'
    ],

    'form' => [
        'email' => [
            'required' => 'E-mail obrigatório.',
            'email' => 'Padrão de email inválido.',
        ],

        'password' => [
            'required' => 'Nova senha obrigatório.',
            'min' => 'Sua nova senha deve ter no minimo :min caracteres.',
            'max' => 'Sua nova senha deve ter no máximo :max caracteres.',
            'regex_lowercase' => 'Sua nova senha precisa conter pelo menos uma letra minúscula.',
            'regex_uppercase' => 'Sua nova senha precisa conter pelo menos uma letra maiúscula.',
            'regex_number' => 'Sua nova senha precisa conter pelo menos um número.',
            'regex_special_character' => 'Sua nova senha precisa conter pelo menos um caractere especial.',
            'confirmed' => 'A senha e a confirmação devem combinar',
        ],
    ],

    'messages' => [
        'reset' => 'Sua senha foi redefinida com sucesso!',
        'error' => 'Não foi possível redefinir sua senha. Tente novamente mais tarde.'
    ],
];
