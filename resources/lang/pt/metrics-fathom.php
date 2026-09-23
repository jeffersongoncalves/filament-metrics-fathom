<?php

return [
    'navigation_group' => 'Definições',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Definições do Fathom Analytics',
    'sections' => [
        'api_configuration' => 'Configuração da API',
        'advanced_settings' => 'Definições avançadas',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'Token da API',
            'helper' => 'O seu token da API do Fathom Analytics. Gere um em usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'ID do site',
            'helper' => 'O ID do seu site no Fathom (por ex., ABCDEFGH). Encontra-se no painel do Fathom, em Site Settings.',
        ],
        'base_url' => [
            'label' => 'URL base',
            'helper' => 'URL base da API do Fathom. Altere apenas se usar um endpoint personalizado.',
        ],
        'timezone' => [
            'label' => 'Fuso horário',
            'helper' => 'Fuso horário usado nas consultas de agregação por data.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Visitantes atuais',
            'total' => 'Visitantes neste momento',
            'top_pages' => 'Páginas principais',
            'top_referrers' => 'Principais referenciadores',
        ],
        'pageviews_chart' => [
            'label' => 'Visualizações e visitas (últimos 30 dias)',
            'visits' => 'Visitas',
            'pageviews' => 'Visualizações de página',
        ],
        'top_pages' => [
            'label' => 'Páginas principais',
            'page' => 'Página',
            'visits' => 'Visitas',
            'pageviews' => 'Visualizações de página',
        ],
        'top_referrers' => [
            'label' => 'Principais referenciadores',
            'referrer' => 'Referenciador',
            'visits' => 'Visitas',
            'uniques' => 'Únicos',
        ],
        'top_browsers' => [
            'label' => 'Principais navegadores',
        ],
        'top_countries' => [
            'label' => 'Principais países',
            'country' => 'País',
            'visits' => 'Visitas',
            'uniques' => 'Únicos',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'not_configured' => 'Não configurado',
        'not_configured_description' => 'Configure o seu token da API do Fathom nas Definições.',
        'no_data' => 'Sem dados disponíveis',
        'error' => 'Erro ao carregar os dados',
    ],
];
