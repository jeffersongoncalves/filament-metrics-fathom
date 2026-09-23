<?php

return [
    'navigation_group' => '設定',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics 設定',
    'sections' => [
        'api_configuration' => 'API 設定',
        'advanced_settings' => '詳細設定',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API トークン',
            'helper' => 'Fathom Analytics の API トークン。usefathom.com/api で生成できます。',
        ],
        'site_id' => [
            'label' => 'サイト ID',
            'helper' => 'Fathom のサイト ID（例: ABCDEFGH）。Fathom ダッシュボードの Site Settings で確認できます。',
        ],
        'base_url' => [
            'label' => 'ベース URL',
            'helper' => 'Fathom API のベース URL。カスタムエンドポイントを使用する場合のみ変更してください。',
        ],
        'timezone' => [
            'label' => 'タイムゾーン',
            'helper' => '日付ベースの集計クエリに使用するタイムゾーン。',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => '現在の訪問者',
            'total' => '現在の訪問者数',
            'top_pages' => '人気ページ',
            'top_referrers' => '主な参照元',
        ],
        'pageviews_chart' => [
            'label' => 'ページビューと訪問数（過去 30 日間）',
            'visits' => '訪問数',
            'pageviews' => 'ページビュー',
        ],
        'top_pages' => [
            'label' => '人気ページ',
            'page' => 'ページ',
            'visits' => '訪問数',
            'pageviews' => 'ページビュー',
        ],
        'top_referrers' => [
            'label' => '主な参照元',
            'referrer' => '参照元',
            'visits' => '訪問数',
            'uniques' => 'ユニーク',
        ],
        'top_browsers' => [
            'label' => '主なブラウザ',
        ],
        'top_countries' => [
            'label' => '主な国',
            'country' => '国',
            'visits' => '訪問数',
            'uniques' => 'ユニーク',
        ],
        'top_devices' => [
            'label' => 'デバイス',
        ],
        'not_configured' => '未設定',
        'not_configured_description' => '設定で Fathom の API トークンを設定してください。',
        'no_data' => 'データがありません',
        'error' => 'データの読み込み中にエラーが発生しました',
    ],
];
