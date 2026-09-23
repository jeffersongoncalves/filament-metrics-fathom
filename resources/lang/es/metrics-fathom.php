<?php

return [
    'navigation_group' => 'Configuración',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Configuración de Fathom Analytics',
    'sections' => [
        'api_configuration' => 'Configuración de la API',
        'advanced_settings' => 'Configuración avanzada',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'Token de API',
            'helper' => 'Tu token de API de Fathom Analytics. Genera uno en usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'ID del sitio',
            'helper' => 'Tu ID de sitio de Fathom (p. ej., ABCDEFGH). Se encuentra en tu panel de Fathom, en Site Settings.',
        ],
        'base_url' => [
            'label' => 'URL base',
            'helper' => 'URL base de la API de Fathom. Cámbiala solo si usas un endpoint personalizado.',
        ],
        'timezone' => [
            'label' => 'Zona horaria',
            'helper' => 'Zona horaria usada en las consultas de agregación por fecha.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Visitantes actuales',
            'total' => 'Visitantes ahora mismo',
            'top_pages' => 'Páginas principales',
            'top_referrers' => 'Principales referentes',
        ],
        'pageviews_chart' => [
            'label' => 'Páginas vistas y visitas (últimos 30 días)',
            'visits' => 'Visitas',
            'pageviews' => 'Páginas vistas',
        ],
        'top_pages' => [
            'label' => 'Páginas principales',
            'page' => 'Página',
            'visits' => 'Visitas',
            'pageviews' => 'Páginas vistas',
        ],
        'top_referrers' => [
            'label' => 'Principales referentes',
            'referrer' => 'Referente',
            'visits' => 'Visitas',
            'uniques' => 'Únicos',
        ],
        'top_browsers' => [
            'label' => 'Principales navegadores',
        ],
        'top_countries' => [
            'label' => 'Principales países',
            'country' => 'País',
            'visits' => 'Visitas',
            'uniques' => 'Únicos',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'not_configured' => 'No configurado',
        'not_configured_description' => 'Configura tu token de API de Fathom en Configuración.',
        'no_data' => 'No hay datos disponibles',
        'error' => 'Error al cargar los datos',
    ],
];
