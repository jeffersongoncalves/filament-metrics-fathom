<?php

return [
    'navigation_group' => 'Ayarlar',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics ayarları',
    'sections' => [
        'api_configuration' => 'API yapılandırması',
        'advanced_settings' => 'Gelişmiş ayarlar',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API anahtarı',
            'helper' => 'Fathom Analytics API anahtarınız. usefathom.com/api adresinden oluşturun.',
        ],
        'site_id' => [
            'label' => 'Site kimliği',
            'helper' => 'Fathom site kimliğiniz (ör. ABCDEFGH). Fathom panelinizde Site Settings altında bulunur.',
        ],
        'base_url' => [
            'label' => 'Temel URL',
            'helper' => 'Fathom API temel URL\'si. Yalnızca özel bir uç nokta kullanıyorsanız değiştirin.',
        ],
        'timezone' => [
            'label' => 'Saat dilimi',
            'helper' => 'Tarihe dayalı toplama sorgularında kullanılan saat dilimi.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Anlık ziyaretçiler',
            'total' => 'Şu anki ziyaretçiler',
            'top_pages' => 'En popüler sayfalar',
            'top_referrers' => 'En çok yönlendirenler',
        ],
        'pageviews_chart' => [
            'label' => 'Sayfa görüntülemeleri ve ziyaretler (son 30 gün)',
            'visits' => 'Ziyaretler',
            'pageviews' => 'Sayfa görüntülemeleri',
        ],
        'top_pages' => [
            'label' => 'En popüler sayfalar',
            'page' => 'Sayfa',
            'visits' => 'Ziyaretler',
            'pageviews' => 'Sayfa görüntülemeleri',
        ],
        'top_referrers' => [
            'label' => 'En çok yönlendirenler',
            'referrer' => 'Yönlendiren',
            'visits' => 'Ziyaretler',
            'uniques' => 'Tekil',
        ],
        'top_browsers' => [
            'label' => 'En popüler tarayıcılar',
        ],
        'top_countries' => [
            'label' => 'En çok ülkeler',
            'country' => 'Ülke',
            'visits' => 'Ziyaretler',
            'uniques' => 'Tekil',
        ],
        'top_devices' => [
            'label' => 'Cihazlar',
        ],
        'not_configured' => 'Yapılandırılmadı',
        'not_configured_description' => 'Fathom API anahtarınızı Ayarlar\'da yapılandırın.',
        'no_data' => 'Veri yok',
        'error' => 'Veriler yüklenirken hata oluştu',
    ],
];
