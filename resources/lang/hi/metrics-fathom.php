<?php

return [
    'navigation_group' => 'सेटिंग्स',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics सेटिंग्स',
    'sections' => [
        'api_configuration' => 'API कॉन्फ़िगरेशन',
        'advanced_settings' => 'उन्नत सेटिंग्स',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API टोकन',
            'helper' => 'आपका Fathom Analytics API टोकन। usefathom.com/api पर एक बनाएँ।',
        ],
        'site_id' => [
            'label' => 'साइट ID',
            'helper' => 'आपकी Fathom साइट ID (जैसे ABCDEFGH)। यह आपके Fathom डैशबोर्ड में Site Settings के अंतर्गत मिलती है।',
        ],
        'base_url' => [
            'label' => 'बेस URL',
            'helper' => 'Fathom API बेस URL। इसे केवल तभी बदलें जब आप कस्टम एंडपॉइंट का उपयोग कर रहे हों।',
        ],
        'timezone' => [
            'label' => 'समय क्षेत्र',
            'helper' => 'तिथि-आधारित एकत्रीकरण क्वेरी के लिए उपयोग किया जाने वाला समय क्षेत्र।',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'वर्तमान आगंतुक',
            'total' => 'अभी आगंतुक',
            'top_pages' => 'शीर्ष पेज',
            'top_referrers' => 'शीर्ष रेफ़रर',
        ],
        'pageviews_chart' => [
            'label' => 'पेज व्यू और विज़िट (पिछले 30 दिन)',
            'visits' => 'विज़िट',
            'pageviews' => 'पेज व्यू',
        ],
        'top_pages' => [
            'label' => 'शीर्ष पेज',
            'page' => 'पेज',
            'visits' => 'विज़िट',
            'pageviews' => 'पेज व्यू',
        ],
        'top_referrers' => [
            'label' => 'शीर्ष रेफ़रर',
            'referrer' => 'रेफ़रर',
            'visits' => 'विज़िट',
            'uniques' => 'अद्वितीय',
        ],
        'top_browsers' => [
            'label' => 'शीर्ष ब्राउज़र',
        ],
        'top_countries' => [
            'label' => 'शीर्ष देश',
            'country' => 'देश',
            'visits' => 'विज़िट',
            'uniques' => 'अद्वितीय',
        ],
        'top_devices' => [
            'label' => 'डिवाइस',
        ],
        'not_configured' => 'कॉन्फ़िगर नहीं है',
        'not_configured_description' => 'सेटिंग्स में अपना Fathom API टोकन कॉन्फ़िगर करें।',
        'no_data' => 'कोई डेटा उपलब्ध नहीं',
        'error' => 'डेटा लोड करने में त्रुटि',
    ],
];
