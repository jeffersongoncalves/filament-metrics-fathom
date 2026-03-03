## Filament Metrics Fathom

A Filament plugin that integrates Fathom Analytics into your admin panel. Provides a settings page and 7 dashboard widgets for real-time visitors, pageviews, top pages, referrers, browsers, countries, and devices.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-metrics-fathom:"^1.0"
</code-snippet>
@endverbatim

### Publish and Run Migrations

@verbatim
<code-snippet name="Publish settings migration" lang="bash">
php artisan vendor:publish --tag="metrics-fathom-settings"
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\MetricsFathom\FathomMetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(FathomMetricsPlugin::make());
}
</code-snippet>
@endverbatim

### Disable Features

@verbatim
<code-snippet name="Disable settings page or widgets" lang="php">
use JeffersonGoncalves\Filament\MetricsFathom\FathomMetricsPlugin;

FathomMetricsPlugin::make()
    ->settingsPage(false) // Disable the settings page
    ->widgets(false)      // Disable all widgets
</code-snippet>
@endverbatim

### Widgets

| Widget | Description | Type |
|--------|-------------|------|
| Current Visitors | Real-time visitor count with top pages | Stats Overview (polls every 30s) |
| Pageviews Chart | Visits and pageviews over the last 30 days | Line Chart |
| Top Pages | Most visited pages with visit/pageview counts | Table |
| Top Referrers | Traffic sources with visit/unique counts | Table |
| Top Browsers | Browser distribution | Doughnut Chart |
| Top Countries | Country distribution with visit/unique counts | Table |
| Top Devices | Device type distribution (desktop, mobile, tablet) | Doughnut Chart |

### Features
- Settings page to configure Fathom API credentials directly from the panel
- 7 ready-to-use dashboard widgets (stats, charts, tables)
- Real-time visitor count with automatic polling (every 30 seconds)
- Built-in caching to respect Fathom API rate limits (10 req/min)
- Multi-language support: English and Brazilian Portuguese (pt_BR)

### Best Practices
- Always publish and run the settings migration before using the plugin
- Configure API token and Site ID via the settings page before widgets display data
- Use `settingsPage(false)` or `widgets(false)` to disable features independently
- Built-in caching handles Fathom API rate limits automatically
