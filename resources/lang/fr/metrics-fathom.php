<?php

return [
    'navigation_group' => 'Paramètres',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Paramètres de Fathom Analytics',
    'sections' => [
        'api_configuration' => 'Configuration de l\'API',
        'advanced_settings' => 'Paramètres avancés',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'Jeton d\'API',
            'helper' => 'Votre jeton d\'API Fathom Analytics. Générez-en un sur usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'ID du site',
            'helper' => 'Votre ID de site Fathom (par ex. ABCDEFGH). Disponible dans votre tableau de bord Fathom, sous Site Settings.',
        ],
        'base_url' => [
            'label' => 'URL de base',
            'helper' => 'URL de base de l\'API Fathom. Modifiez-la uniquement si vous utilisez un point de terminaison personnalisé.',
        ],
        'timezone' => [
            'label' => 'Fuseau horaire',
            'helper' => 'Fuseau horaire utilisé pour les requêtes d\'agrégation par date.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Visiteurs actuels',
            'total' => 'Visiteurs en ce moment',
            'top_pages' => 'Pages principales',
            'top_referrers' => 'Principaux référents',
        ],
        'pageviews_chart' => [
            'label' => 'Pages vues et visites (30 derniers jours)',
            'visits' => 'Visites',
            'pageviews' => 'Pages vues',
        ],
        'top_pages' => [
            'label' => 'Pages principales',
            'page' => 'Page',
            'visits' => 'Visites',
            'pageviews' => 'Pages vues',
        ],
        'top_referrers' => [
            'label' => 'Principaux référents',
            'referrer' => 'Référent',
            'visits' => 'Visites',
            'uniques' => 'Uniques',
        ],
        'top_browsers' => [
            'label' => 'Principaux navigateurs',
        ],
        'top_countries' => [
            'label' => 'Principaux pays',
            'country' => 'Pays',
            'visits' => 'Visites',
            'uniques' => 'Uniques',
        ],
        'top_devices' => [
            'label' => 'Appareils',
        ],
        'not_configured' => 'Non configuré',
        'not_configured_description' => 'Configurez votre jeton d\'API Fathom dans les Paramètres.',
        'no_data' => 'Aucune donnée disponible',
        'error' => 'Erreur lors du chargement des données',
    ],
];
