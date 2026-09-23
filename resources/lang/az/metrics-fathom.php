<?php

return [
    'navigation_group' => 'Parametrlər',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics parametrləri',
    'sections' => [
        'api_configuration' => 'API konfiqurasiyası',
        'advanced_settings' => 'Qabaqcıl parametrlər',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API tokeni',
            'helper' => 'Fathom Analytics API tokeniniz. usefathom.com/api ünvanında yaradın.',
        ],
        'site_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Fathom sayt ID-niz (məs. ABCDEFGH). Fathom panelində Site Settings bölməsində tapılır.',
        ],
        'base_url' => [
            'label' => 'Əsas URL',
            'helper' => 'Fathom API əsas URL-i. Yalnız xüsusi endpoint istifadə edirsinizsə dəyişin.',
        ],
        'timezone' => [
            'label' => 'Saat qurşağı',
            'helper' => 'Tarixə əsaslanan toplama sorğuları üçün istifadə olunan saat qurşağı.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Cari ziyarətçilər',
            'total' => 'Hazırda ziyarətçilər',
            'top_pages' => 'Ən populyar səhifələr',
            'top_referrers' => 'Ən çox yönləndirənlər',
        ],
        'pageviews_chart' => [
            'label' => 'Səhifə baxışları və ziyarətlər (son 30 gün)',
            'visits' => 'Ziyarətlər',
            'pageviews' => 'Səhifə baxışları',
        ],
        'top_pages' => [
            'label' => 'Ən populyar səhifələr',
            'page' => 'Səhifə',
            'visits' => 'Ziyarətlər',
            'pageviews' => 'Səhifə baxışları',
        ],
        'top_referrers' => [
            'label' => 'Ən çox yönləndirənlər',
            'referrer' => 'Yönləndirən',
            'visits' => 'Ziyarətlər',
            'uniques' => 'Unikal',
        ],
        'top_browsers' => [
            'label' => 'Ən populyar brauzerlər',
        ],
        'top_countries' => [
            'label' => 'Ən çox ölkələr',
            'country' => 'Ölkə',
            'visits' => 'Ziyarətlər',
            'uniques' => 'Unikal',
        ],
        'top_devices' => [
            'label' => 'Cihazlar',
        ],
        'not_configured' => 'Konfiqurasiya edilməyib',
        'not_configured_description' => 'Fathom API tokeninizi Parametrlərdə konfiqurasiya edin.',
        'no_data' => 'Məlumat yoxdur',
        'error' => 'Məlumat yüklənərkən xəta',
    ],
];
