<?php

return [
    'navigation_group' => 'Instellingen',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics-instellingen',
    'sections' => [
        'api_configuration' => 'API-configuratie',
        'advanced_settings' => 'Geavanceerde instellingen',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API-token',
            'helper' => 'Je Fathom Analytics-API-token. Genereer er een op usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'Site-ID',
            'helper' => 'Je Fathom-site-ID (bijv. ABCDEFGH). Te vinden in je Fathom-dashboard onder Site Settings.',
        ],
        'base_url' => [
            'label' => 'Basis-URL',
            'helper' => 'Basis-URL van de Fathom-API. Wijzig dit alleen als je een aangepast endpoint gebruikt.',
        ],
        'timezone' => [
            'label' => 'Tijdzone',
            'helper' => 'Tijdzone die wordt gebruikt voor datumgebaseerde aggregatiequery\'s.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Huidige bezoekers',
            'total' => 'Bezoekers op dit moment',
            'top_pages' => 'Toppagina\'s',
            'top_referrers' => 'Topverwijzers',
        ],
        'pageviews_chart' => [
            'label' => 'Paginaweergaven en bezoeken (laatste 30 dagen)',
            'visits' => 'Bezoeken',
            'pageviews' => 'Paginaweergaven',
        ],
        'top_pages' => [
            'label' => 'Toppagina\'s',
            'page' => 'Pagina',
            'visits' => 'Bezoeken',
            'pageviews' => 'Paginaweergaven',
        ],
        'top_referrers' => [
            'label' => 'Topverwijzers',
            'referrer' => 'Verwijzer',
            'visits' => 'Bezoeken',
            'uniques' => 'Uniek',
        ],
        'top_browsers' => [
            'label' => 'Topbrowsers',
        ],
        'top_countries' => [
            'label' => 'Toplanden',
            'country' => 'Land',
            'visits' => 'Bezoeken',
            'uniques' => 'Uniek',
        ],
        'top_devices' => [
            'label' => 'Apparaten',
        ],
        'not_configured' => 'Niet geconfigureerd',
        'not_configured_description' => 'Configureer je Fathom-API-token in Instellingen.',
        'no_data' => 'Geen gegevens beschikbaar',
        'error' => 'Fout bij het laden van gegevens',
    ],
];
