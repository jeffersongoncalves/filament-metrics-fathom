<?php

return [
    'navigation_group' => 'الإعدادات',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'إعدادات Fathom Analytics',
    'sections' => [
        'api_configuration' => 'إعدادات API',
        'advanced_settings' => 'إعدادات متقدمة',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'رمز API',
            'helper' => 'رمز API الخاص بك في Fathom Analytics. أنشئ واحدًا من usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'معرّف الموقع',
            'helper' => 'معرّف موقعك في Fathom (مثل ABCDEFGH). تجده في لوحة تحكم Fathom ضمن إعدادات الموقع.',
        ],
        'base_url' => [
            'label' => 'الرابط الأساسي',
            'helper' => 'الرابط الأساسي لـ API الخاص بـ Fathom. غيّره فقط إذا كنت تستخدم نقطة نهاية مخصصة.',
        ],
        'timezone' => [
            'label' => 'المنطقة الزمنية',
            'helper' => 'المنطقة الزمنية المستخدمة في استعلامات التجميع حسب التاريخ.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'الزوار الحاليون',
            'total' => 'الزوار الآن',
            'top_pages' => 'أهم الصفحات',
            'top_referrers' => 'أهم المُحيلين',
        ],
        'pageviews_chart' => [
            'label' => 'مشاهدات الصفحات والزيارات (آخر 30 يومًا)',
            'visits' => 'الزيارات',
            'pageviews' => 'مشاهدات الصفحات',
        ],
        'top_pages' => [
            'label' => 'أهم الصفحات',
            'page' => 'الصفحة',
            'visits' => 'الزيارات',
            'pageviews' => 'مشاهدات الصفحات',
        ],
        'top_referrers' => [
            'label' => 'أهم المُحيلين',
            'referrer' => 'المُحيل',
            'visits' => 'الزيارات',
            'uniques' => 'الفريدة',
        ],
        'top_browsers' => [
            'label' => 'أهم المتصفحات',
        ],
        'top_countries' => [
            'label' => 'أهم الدول',
            'country' => 'الدولة',
            'visits' => 'الزيارات',
            'uniques' => 'الفريدة',
        ],
        'top_devices' => [
            'label' => 'الأجهزة',
        ],
        'not_configured' => 'غير مُعد',
        'not_configured_description' => 'اضبط رمز API الخاص بـ Fathom في الإعدادات.',
        'no_data' => 'لا توجد بيانات',
        'error' => 'خطأ في تحميل البيانات',
    ],
];
