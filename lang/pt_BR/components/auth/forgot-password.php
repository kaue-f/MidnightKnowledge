<?php

return [
    'title' => 'Solicitar redefinição de senha',
    'subtitle' => 'Informe seu e-mail registrado e enviaremos instruções para redefinir sua senha.',
    'label' => 'E-mail cadastrado',
    'placeholder' => 'Digite seu e-mail',
    'send' => 'Enviar',
    'return' => 'Retornar',

    'form' => [
        'email' => [
            'required' => 'E-mail obrigatório.',
            'email' => 'Padrão de email inválido.',
        ]
    ],

    'messages' => [
        'sent' => 'Um link de redefinição de senha foi enviado para o seu e-mail, se ele estiver cadastrado em nosso sistema.',
        'error' => 'Não foi possível enviar o link de redefinição de senha. Tente novamente mais tarde.',
    ],
];
