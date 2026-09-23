<?php

return [
    'navigation_group' => '设置',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics 设置',
    'sections' => [
        'api_configuration' => 'API 配置',
        'advanced_settings' => '高级设置',
    ],
    'fields' => [
        'api_token' => [
            'label' => 'API 令牌',
            'helper' => '你的 Fathom Analytics API 令牌，可在 usefathom.com/api 生成。',
        ],
        'site_id' => [
            'label' => '站点 ID',
            'helper' => '你的 Fathom 站点 ID（例如 ABCDEFGH），可在 Fathom 控制台的 Site Settings 中找到。',
        ],
        'base_url' => [
            'label' => '基础 URL',
            'helper' => 'Fathom API 基础 URL。仅在使用自定义端点时修改。',
        ],
        'timezone' => [
            'label' => '时区',
            'helper' => '按日期聚合查询时使用的时区。',
        ],
    ],
    'widgets' => [
        'current_visitors' => [
            'label' => '当前访客',
            'total' => '当前在线访客',
            'top_pages' => '热门页面',
            'top_referrers' => '主要来源',
        ],
        'pageviews_chart' => [
            'label' => '页面浏览量与访问量（最近 30 天）',
            'visits' => '访问量',
            'pageviews' => '页面浏览量',
        ],
        'top_pages' => [
            'label' => '热门页面',
            'page' => '页面',
            'visits' => '访问量',
            'pageviews' => '页面浏览量',
        ],
        'top_referrers' => [
            'label' => '主要来源',
            'referrer' => '来源',
            'visits' => '访问量',
            'uniques' => '独立访客',
        ],
        'top_browsers' => [
            'label' => '主要浏览器',
        ],
        'top_countries' => [
            'label' => '主要国家/地区',
            'country' => '国家/地区',
            'visits' => '访问量',
            'uniques' => '独立访客',
        ],
        'top_devices' => [
            'label' => '设备',
        ],
        'not_configured' => '未配置',
        'not_configured_description' => '请在设置中配置你的 Fathom API 令牌。',
        'no_data' => '暂无数据',
        'error' => '加载数据时出错',
    ],
];
