<?php

return [
    'navigation_group' => 'Einstellungen',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics-Einstellungen',
    'sections' => [
        'api_configuration' => 'API-Konfiguration',
        'advanced_settings' => 'Erweiterte Einstellungen',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API-Token',
            'helper' => 'Ihr Fathom Analytics-API-Token. Erstellen Sie eines unter usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'Site-ID',
            'helper' => 'Ihre Fathom-Site-ID (z. B. ABCDEFGH). Zu finden in Ihrem Fathom-Dashboard unter Site Settings.',
        ],
        'base_url' => [
            'label' => 'Basis-URL',
            'helper' => 'Basis-URL der Fathom-API. Nur ändern, wenn Sie einen benutzerdefinierten Endpunkt verwenden.',
        ],
        'timezone' => [
            'label' => 'Zeitzone',
            'helper' => 'Zeitzone für datumsbasierte Aggregationsabfragen.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Aktuelle Besucher',
            'total' => 'Besucher gerade online',
            'top_pages' => 'Top-Seiten',
            'top_referrers' => 'Top-Verweise',
        ],
        'pageviews_chart' => [
            'label' => 'Seitenaufrufe & Besuche (letzte 30 Tage)',
            'visits' => 'Besuche',
            'pageviews' => 'Seitenaufrufe',
        ],
        'top_pages' => [
            'label' => 'Top-Seiten',
            'page' => 'Seite',
            'visits' => 'Besuche',
            'pageviews' => 'Seitenaufrufe',
        ],
        'top_referrers' => [
            'label' => 'Top-Verweise',
            'referrer' => 'Verweis',
            'visits' => 'Besuche',
            'uniques' => 'Eindeutige',
        ],
        'top_browsers' => [
            'label' => 'Top-Browser',
        ],
        'top_countries' => [
            'label' => 'Top-Länder',
            'country' => 'Land',
            'visits' => 'Besuche',
            'uniques' => 'Eindeutige',
        ],
        'top_devices' => [
            'label' => 'Geräte',
        ],
        'not_configured' => 'Nicht konfiguriert',
        'not_configured_description' => 'Konfigurieren Sie Ihr Fathom-API-Token in den Einstellungen.',
        'no_data' => 'Keine Daten verfügbar',
        'error' => 'Fehler beim Laden der Daten',
    ],
];
