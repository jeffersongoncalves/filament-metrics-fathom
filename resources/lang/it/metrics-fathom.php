<?php

return [
    'navigation_group' => 'Impostazioni',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Impostazioni di Fathom Analytics',
    'sections' => [
        'api_configuration' => 'Configurazione API',
        'advanced_settings' => 'Impostazioni avanzate',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'Token API',
            'helper' => 'Il tuo token API di Fathom Analytics. Generane uno su usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'ID sito',
            'helper' => 'L\'ID del tuo sito Fathom (ad es. ABCDEFGH). Si trova nella dashboard di Fathom, in Site Settings.',
        ],
        'base_url' => [
            'label' => 'URL di base',
            'helper' => 'URL di base dell\'API di Fathom. Modificalo solo se usi un endpoint personalizzato.',
        ],
        'timezone' => [
            'label' => 'Fuso orario',
            'helper' => 'Fuso orario usato per le query di aggregazione basate sulla data.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Visitatori attuali',
            'total' => 'Visitatori in questo momento',
            'top_pages' => 'Pagine principali',
            'top_referrers' => 'Principali referrer',
        ],
        'pageviews_chart' => [
            'label' => 'Visualizzazioni e visite (ultimi 30 giorni)',
            'visits' => 'Visite',
            'pageviews' => 'Visualizzazioni',
        ],
        'top_pages' => [
            'label' => 'Pagine principali',
            'page' => 'Pagina',
            'visits' => 'Visite',
            'pageviews' => 'Visualizzazioni',
        ],
        'top_referrers' => [
            'label' => 'Principali referrer',
            'referrer' => 'Referrer',
            'visits' => 'Visite',
            'uniques' => 'Unici',
        ],
        'top_browsers' => [
            'label' => 'Browser principali',
        ],
        'top_countries' => [
            'label' => 'Paesi principali',
            'country' => 'Paese',
            'visits' => 'Visite',
            'uniques' => 'Unici',
        ],
        'top_devices' => [
            'label' => 'Dispositivi',
        ],
        'not_configured' => 'Non configurato',
        'not_configured_description' => 'Configura il tuo token API di Fathom nelle Impostazioni.',
        'no_data' => 'Nessun dato disponibile',
        'error' => 'Errore durante il caricamento dei dati',
    ],
];
