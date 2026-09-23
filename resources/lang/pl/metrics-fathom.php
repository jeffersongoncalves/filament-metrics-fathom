<?php

return [
    'navigation_group' => 'Ustawienia',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Ustawienia Fathom Analytics',
    'sections' => [
        'api_configuration' => 'Konfiguracja API',
        'advanced_settings' => 'Ustawienia zaawansowane',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'Token API',
            'helper' => 'Token API Fathom Analytics. Wygeneruj go na usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'ID witryny',
            'helper' => 'Identyfikator witryny Fathom (np. ABCDEFGH). Znajdziesz go w panelu Fathom w sekcji Site Settings.',
        ],
        'base_url' => [
            'label' => 'Bazowy URL',
            'helper' => 'Bazowy adres URL API Fathom. Zmień tylko, jeśli używasz niestandardowego punktu końcowego.',
        ],
        'timezone' => [
            'label' => 'Strefa czasowa',
            'helper' => 'Strefa czasowa używana w zapytaniach agregujących według daty.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Bieżący odwiedzający',
            'total' => 'Odwiedzający teraz',
            'top_pages' => 'Najpopularniejsze strony',
            'top_referrers' => 'Główne źródła odesłań',
        ],
        'pageviews_chart' => [
            'label' => 'Odsłony i wizyty (ostatnie 30 dni)',
            'visits' => 'Wizyty',
            'pageviews' => 'Odsłony',
        ],
        'top_pages' => [
            'label' => 'Najpopularniejsze strony',
            'page' => 'Strona',
            'visits' => 'Wizyty',
            'pageviews' => 'Odsłony',
        ],
        'top_referrers' => [
            'label' => 'Główne źródła odesłań',
            'referrer' => 'Źródło odesłania',
            'visits' => 'Wizyty',
            'uniques' => 'Unikalne',
        ],
        'top_browsers' => [
            'label' => 'Najpopularniejsze przeglądarki',
        ],
        'top_countries' => [
            'label' => 'Najpopularniejsze kraje',
            'country' => 'Kraj',
            'visits' => 'Wizyty',
            'uniques' => 'Unikalne',
        ],
        'top_devices' => [
            'label' => 'Urządzenia',
        ],
        'not_configured' => 'Nieskonfigurowane',
        'not_configured_description' => 'Skonfiguruj token API Fathom w Ustawieniach.',
        'no_data' => 'Brak danych',
        'error' => 'Błąd podczas ładowania danych',
    ],
];
