<?php

return [
    'navigation_group' => 'Sozlamalar',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics sozlamalari',
    'sections' => [
        'api_configuration' => 'API konfiguratsiyasi',
        'advanced_settings' => 'Kengaytirilgan sozlamalar',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API tokeni',
            'helper' => 'Fathom Analytics API tokeningiz. Uni usefathom.com/api manzilida yarating.',
        ],
        'site_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Fathom sayt ID raqamingiz (masalan, ABCDEFGH). Fathom panelida Site Settings boʻlimida joylashgan.',
        ],
        'base_url' => [
            'label' => 'Asosiy URL',
            'helper' => 'Fathom API asosiy URL manzili. Faqat maxsus endpoint ishlatayotgan boʻlsangiz oʻzgartiring.',
        ],
        'timezone' => [
            'label' => 'Vaqt mintaqasi',
            'helper' => 'Sanaga asoslangan jamlash soʻrovlari uchun ishlatiladigan vaqt mintaqasi.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Joriy tashrif buyuruvchilar',
            'total' => 'Hozirgi tashrif buyuruvchilar',
            'top_pages' => 'Eng mashhur sahifalar',
            'top_referrers' => 'Asosiy manbalar',
        ],
        'pageviews_chart' => [
            'label' => 'Sahifa koʻrishlari va tashriflar (oxirgi 30 kun)',
            'visits' => 'Tashriflar',
            'pageviews' => 'Sahifa koʻrishlari',
        ],
        'top_pages' => [
            'label' => 'Eng mashhur sahifalar',
            'page' => 'Sahifa',
            'visits' => 'Tashriflar',
            'pageviews' => 'Sahifa koʻrishlari',
        ],
        'top_referrers' => [
            'label' => 'Asosiy manbalar',
            'referrer' => 'Manba',
            'visits' => 'Tashriflar',
            'uniques' => 'Noyob',
        ],
        'top_browsers' => [
            'label' => 'Eng mashhur brauzerlar',
        ],
        'top_countries' => [
            'label' => 'Asosiy mamlakatlar',
            'country' => 'Mamlakat',
            'visits' => 'Tashriflar',
            'uniques' => 'Noyob',
        ],
        'top_devices' => [
            'label' => 'Qurilmalar',
        ],
        'not_configured' => 'Sozlanmagan',
        'not_configured_description' => 'Fathom API tokeningizni Sozlamalarda sozlang.',
        'no_data' => 'Maʼlumot yoʻq',
        'error' => 'Maʼlumotlarni yuklashda xato',
    ],
];
