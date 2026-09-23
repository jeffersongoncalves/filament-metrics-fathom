<?php

return [
    'navigation_group' => 'Настройки',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Настройки Fathom Analytics',
    'sections' => [
        'api_configuration' => 'Настройка API',
        'advanced_settings' => 'Расширенные настройки',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API-токен',
            'helper' => 'Ваш API-токен Fathom Analytics. Создайте его на usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'ID сайта',
            'helper' => 'ID вашего сайта в Fathom (например, ABCDEFGH). Находится в панели Fathom в разделе Site Settings.',
        ],
        'base_url' => [
            'label' => 'Базовый URL',
            'helper' => 'Базовый URL API Fathom. Изменяйте, только если используете собственный эндпоинт.',
        ],
        'timezone' => [
            'label' => 'Часовой пояс',
            'helper' => 'Часовой пояс для запросов агрегации по дате.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Текущие посетители',
            'total' => 'Посетителей сейчас',
            'top_pages' => 'Популярные страницы',
            'top_referrers' => 'Основные источники',
        ],
        'pageviews_chart' => [
            'label' => 'Просмотры и визиты (последние 30 дней)',
            'visits' => 'Визиты',
            'pageviews' => 'Просмотры',
        ],
        'top_pages' => [
            'label' => 'Популярные страницы',
            'page' => 'Страница',
            'visits' => 'Визиты',
            'pageviews' => 'Просмотры',
        ],
        'top_referrers' => [
            'label' => 'Основные источники',
            'referrer' => 'Источник',
            'visits' => 'Визиты',
            'uniques' => 'Уникальные',
        ],
        'top_browsers' => [
            'label' => 'Популярные браузеры',
        ],
        'top_countries' => [
            'label' => 'Основные страны',
            'country' => 'Страна',
            'visits' => 'Визиты',
            'uniques' => 'Уникальные',
        ],
        'top_devices' => [
            'label' => 'Устройства',
        ],
        'not_configured' => 'Не настроено',
        'not_configured_description' => 'Укажите API-токен Fathom в настройках.',
        'no_data' => 'Нет данных',
        'error' => 'Ошибка загрузки данных',
    ],
];
