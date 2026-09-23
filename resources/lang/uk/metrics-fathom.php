<?php

return [
    'navigation_group' => 'Налаштування',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Налаштування Fathom Analytics',
    'sections' => [
        'api_configuration' => 'Налаштування API',
        'advanced_settings' => 'Розширені налаштування',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API-токен',
            'helper' => 'Ваш API-токен Fathom Analytics. Створіть його на usefathom.com/api.',
        ],
        'site_id' => [
            'label' => 'ID сайту',
            'helper' => 'ID вашого сайту у Fathom (наприклад, ABCDEFGH). Знаходиться в панелі Fathom у розділі Site Settings.',
        ],
        'base_url' => [
            'label' => 'Базовий URL',
            'helper' => 'Базовий URL API Fathom. Змінюйте, лише якщо використовуєте власний ендпоінт.',
        ],
        'timezone' => [
            'label' => 'Часовий пояс',
            'helper' => 'Часовий пояс для запитів агрегації за датою.',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => 'Поточні відвідувачі',
            'total' => 'Відвідувачів зараз',
            'top_pages' => 'Популярні сторінки',
            'top_referrers' => 'Основні джерела',
        ],
        'pageviews_chart' => [
            'label' => 'Перегляди та візити (останні 30 днів)',
            'visits' => 'Візити',
            'pageviews' => 'Перегляди',
        ],
        'top_pages' => [
            'label' => 'Популярні сторінки',
            'page' => 'Сторінка',
            'visits' => 'Візити',
            'pageviews' => 'Перегляди',
        ],
        'top_referrers' => [
            'label' => 'Основні джерела',
            'referrer' => 'Джерело',
            'visits' => 'Візити',
            'uniques' => 'Унікальні',
        ],
        'top_browsers' => [
            'label' => 'Популярні браузери',
        ],
        'top_countries' => [
            'label' => 'Основні країни',
            'country' => 'Країна',
            'visits' => 'Візити',
            'uniques' => 'Унікальні',
        ],
        'top_devices' => [
            'label' => 'Пристрої',
        ],
        'not_configured' => 'Не налаштовано',
        'not_configured_description' => 'Вкажіть API-токен Fathom у налаштуваннях.',
        'no_data' => 'Немає даних',
        'error' => 'Помилка завантаження даних',
    ],
];
