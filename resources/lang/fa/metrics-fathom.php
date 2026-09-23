<?php

return [
    'navigation_group' => 'تنظیمات',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'تنظیمات Fathom Analytics',
    'sections' => [
        'api_configuration' => 'پیکربندی API',
        'advanced_settings' => 'تنظیمات پیشرفته',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'توکن API',
            'helper' => 'توکن API شما در Fathom Analytics. از usefathom.com/api یک توکن بسازید.',
        ],
        'site_id' => [
            'label' => 'شناسه سایت',
            'helper' => 'شناسه سایت شما در Fathom (مثلاً ABCDEFGH). در داشبورد Fathom بخش Site Settings قرار دارد.',
        ],
        'base_url' => [
            'label' => 'آدرس پایه',
            'helper' => 'آدرس پایه API در Fathom. فقط در صورت استفاده از نقطه پایانی سفارشی تغییر دهید.',
        ],
        'timezone' => [
            'label' => 'منطقه زمانی',
            'helper' => 'منطقه زمانی مورد استفاده برای پرس‌وجوهای تجمیعی مبتنی بر تاریخ.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'بازدیدکنندگان فعلی',
            'total' => 'بازدیدکنندگان در همین لحظه',
            'top_pages' => 'صفحات برتر',
            'top_referrers' => 'ارجاع‌دهندگان برتر',
        ],
        'pageviews_chart' => [
            'label' => 'بازدید صفحات و بازدیدها (۳۰ روز اخیر)',
            'visits' => 'بازدیدها',
            'pageviews' => 'بازدید صفحات',
        ],
        'top_pages' => [
            'label' => 'صفحات برتر',
            'page' => 'صفحه',
            'visits' => 'بازدیدها',
            'pageviews' => 'بازدید صفحات',
        ],
        'top_referrers' => [
            'label' => 'ارجاع‌دهندگان برتر',
            'referrer' => 'ارجاع‌دهنده',
            'visits' => 'بازدیدها',
            'uniques' => 'یکتا',
        ],
        'top_browsers' => [
            'label' => 'مرورگرهای برتر',
        ],
        'top_countries' => [
            'label' => 'کشورهای برتر',
            'country' => 'کشور',
            'visits' => 'بازدیدها',
            'uniques' => 'یکتا',
        ],
        'top_devices' => [
            'label' => 'دستگاه‌ها',
        ],
        'not_configured' => 'پیکربندی نشده',
        'not_configured_description' => 'توکن API مربوط به Fathom را در تنظیمات پیکربندی کنید.',
        'no_data' => 'داده‌ای موجود نیست',
        'error' => 'خطا در بارگذاری داده‌ها',
    ],
];
