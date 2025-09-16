<?php

return [
    'label' => [
        'nickname' => 'Apelido',
        'nickname_hint' => 'O apelido pode conter apenas letras e números, e hífens simples (não pode começar ou terminar com hífen).',
        'email' => 'E-mail',
        'password' => 'Senha',
        'password_hint' => 'A senha deve ter no mínimo 8 incluindo número, letra minúscula, letra maiúscula e caractere especial.',
        'confirm_password' => 'Confirmar senha',
        'register' => 'Registrar',
    ],

    'placeholder' => [
        'nickname' => 'Digite seu apelido',
        'email' => 'Digite seu e-mail',
        'password' => 'Digite sua senha',
        'confirm_password' => 'Confirme sua senha'
    ],

    'or' => 'Ou',
    'login' => 'Acessar conta',

    'form' => [
        'nickname' => [
            'required' => 'Nickname obrigatório.',
            'min' => 'Nickname deve ter no minimo :min caracteres.',
            'max' => 'Nickname deve ter no máximo :max caracteres.',
            'unique' => 'Nickname já está cadastrado.'
        ],

        'email' => [
            'required' => 'E-mail obrigatório.',
            'email' => 'Padrão de email inválido.',
            'unique' => 'Este email já está cadastrado.'
        ],

        'password' => [
            'required' => 'Senha obrigatório.',
            'min' => 'Sua senha deve ter no minimo :min caracteres.',
            'max' => 'Sua senha deve ter no máximo :max caracteres.',
            'regex_lowercase' => 'Sua senha precisa conter pelo menos uma letra minúscula.',
            'regex_uppercase' => 'Sua senha precisa conter pelo menos uma letra maiúscula.',
            'regex_number' => 'Sua senha precisa conter pelo menos um número.',
            'regex_special_character' => 'Sua senha precisa conter pelo menos um caractere especial.',
            'confirmed' => 'A senha e a confirmação devem combinar',
        ],
    ],

    'messages' => [
        'success' => 'Para acessar sua conta, por favor, verifique seu e-mail e confirme seu cadastro.',
        'error' => 'Erro ao criar sua conta. Verifique os dados e tente novamente.',
        'warning' => 'Falha ao criar sua conta. Verifique os dados e tente novamente.',
    ],
];
