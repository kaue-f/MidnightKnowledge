<?php

return [

    /*
     * Enum for content types with labels.
     */
    'contentTypeEnum' => [
        'label' => [
            'anime' => 'Animes',
            'book' => 'Livros',
            'cartoon' => 'Desenhos',
            'game' => 'Games',
            'manga' => 'Mangás',
            'movie' => 'Filmes',
            'serie' => 'Séries',
            'movie_serie' => 'Filmes/Séries',
        ]
    ],

    /*
     * Enum for permissions with labels.
     */
    'permissionEnum' => [
        'label' => [
            'report_review_users' => 'Análise de Denúncias de Usuários',
            'report_review_comments' => 'Análise de Denúncias de Comentários',
            'report_review_contents' => 'Análise de Denúncias de Conteúdos',
            'content_review_new' => 'Análise de Novo Conteúdo',
            'content_review_update' => 'Análise de Atualização de Conteúdo',
            'grant_ban_user' => 'Conceder Ban ao Usuário',
            'bypass_content_review' => 'Criar Conteúdo sem Revisão',
            'submit_content_for_review' => 'Atualizar Conteúdo sem Revisão',
            'update_profile' => 'Atualizar Perfil',
            'ban_comment' => 'Ban por Comentário',
            'ban_content' => 'Ban por Conteúdo',
            'revocation_denunciation' => 'Revogação de Denúncia',
            'suspended_account' => 'Conta Suspensa',
        ]
    ],

    /*
     * Enum for profile visibility with labels and descriptions.
     */
    'profileVisibilityEnum' => [
        'label' => [
            'public' => 'Público',
            'private' => 'Privado',
            'followers' => 'Seguidores',
            'suspended' => 'Suspenso',
        ],
        'description' => [
            'public' => 'Perfil visível para todos.',
            'private' => 'Perfil visível apenas para o proprietário.',
            'followers' => 'Perfil visível apenas para seguidores.',
            'suspended' => 'Perfil suspenso por violação de regras.',
        ],
    ],

    /*
     * Enum for review states with labels.
     */
    'reviewStateEnum' => [
        'label' => [
            'pending' => 'Aguardando Revisão',
            'approved' => 'Aprovado',
            'rejected' => 'Rejeitado',
            'archived' => 'Arquivado',
            'auto_approved' => 'Auto Aprovado',
            'needs_revision' => 'Revisão Necessária',
            'invalid_report' => 'Denúncia Inválida',
            'action_taken' => 'Ação Tomada',
            'ignored' => 'Ignorado',
            'deleted' => 'Deletado',
        ],
    ],

    /*
     * Enum for roles with labels and descriptions.
     */
    'roleEnum' => [
        'label' => [
            'manager' => 'Administrador',
            'moderator' => 'Moderador',
            'contributor' => 'Colaborador',
            'vip' => 'VIP',
            'member' => 'Membro',
        ],
        'description' => [
            'manager' => 'Gerencia o site e toma decisões importantes.',
            'moderator' => 'Modera o conteúdo e interage com a comunidade.',
            'contributor' => 'Contribui com conteúdo e ajuda na manutenção.',
            'vip' => 'Usuário com benefícios exclusivos.',
            'member' => 'Usuário comum.',
        ],
    ],

    /*
     * Enum for statuses with labels.
     */
    'statusEnum' => [
        'label' => [
            'in_progress' => 'Em Progresso',
            'planned' => 'Lista de Desejos',
            'completed' => 'Finalizado',
            'paused' => 'Pausado',
            'dropped' => 'Dropado',
        ],
    ],
];
