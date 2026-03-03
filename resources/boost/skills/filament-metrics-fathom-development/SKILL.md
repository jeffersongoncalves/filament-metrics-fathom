---
name: filament-metrics-fathom-development
description: Build and work with Filament Metrics Fathom plugin features, including Fathom Analytics settings page, dashboard widgets, real-time visitors, and caching.
---

# Filament Metrics Fathom Development

## When to use this skill

Use this skill when:
- Integrating Fathom Analytics into a Filament dashboard
- Configuring the Fathom settings page (API token, site ID, timezone)
- Working with Fathom dashboard widgets (visitors, pageviews, top pages, referrers, browsers, countries, devices)
- Troubleshooting Fathom API connectivity, caching, or widget display issues

## Architecture

The plugin provides a Filament plugin class that registers a settings page and 7 dashboard widgets.

### Namespace

```
JeffersonGoncalves\Filament\MetricsFathom
```

### Key Classes

| Class | Namespace | Purpose |
|-------|-----------|---------|
| `FathomMetricsPlugin` | `JeffersonGoncalves\Filament\MetricsFathom` | Main Filament plugin |
| `FathomMetricsServiceProvider` | `JeffersonGoncalves\Filament\MetricsFathom` | Service provider |
| `FathomMetricsSettingsPage` | `JeffersonGoncalves\Filament\MetricsFathom\Pages` | Settings page (extends `SettingsPage`) |
| `FathomSettings` | `JeffersonGoncalves\MetricsFathom\Settings` | Settings class (from `laravel-metrics-fathom`) |

### Widget Classes

| Class | Namespace | Type |
|-------|-----------|------|
| `CurrentVisitorsWidget` | `JeffersonGoncalves\Filament\MetricsFathom\Widgets` | Stats Overview (polls every 30s) |
| `PageviewsChartWidget` | `JeffersonGoncalves\Filament\MetricsFathom\Widgets` | Line Chart |
| `TopPagesWidget` | `JeffersonGoncalves\Filament\MetricsFathom\Widgets` | Table |
| `TopReferrersWidget` | `JeffersonGoncalves\Filament\MetricsFathom\Widgets` | Table |
| `TopBrowsersWidget` | `JeffersonGoncalves\Filament\MetricsFathom\Widgets` | Doughnut Chart |
| `TopCountriesWidget` | `JeffersonGoncalves\Filament\MetricsFathom\Widgets` | Table |
| `TopDevicesWidget` | `JeffersonGoncalves\Filament\MetricsFathom\Widgets` | Doughnut Chart |

### Dependencies

- `jeffersongoncalves/laravel-metrics-fathom` ^1.0 - Core Fathom Analytics integration
- `filament/spatie-laravel-settings-plugin` ^3.0 - Filament settings page support
- `spatie/laravel-settings` - Database-backed settings

## Installation

```bash
composer require jeffersongoncalves/filament-metrics-fathom:"^1.0"
```

Publish and run the settings migration:

```bash
php artisan vendor:publish --tag="metrics-fathom-settings"
php artisan migrate
```

### Version Compatibility

| Plugin | Filament | Laravel | PHP | Livewire |
|--------|----------|---------|-----|----------|
| 1.x | 3.x | 10.x / 11.x | 8.2+ | 3.x |
| 2.x | 4.x | 11.x+ | 8.2+ | 3.x |
| 3.x | 5.x | 11.x+ | 8.2+ | 4.x |

## Configuration

### Basic Setup

```php
use JeffersonGoncalves\Filament\MetricsFathom\FathomMetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugin(FathomMetricsPlugin::make());
}
```

### Disable Features Independently

```php
FathomMetricsPlugin::make()
    ->settingsPage(false) // Disable the settings page
    ->widgets(false)      // Disable all widgets
```

### Plugin Methods

| Method | Default | Description |
|--------|---------|-------------|
| `settingsPage(bool $condition = true)` | `true` | Enable/disable the settings page |
| `widgets(bool $condition = true)` | `true` | Enable/disable all dashboard widgets |

## Settings Page

The `FathomMetricsSettingsPage` extends Filament's `SettingsPage` and uses `FathomSettings` from the `laravel-metrics-fathom` package.

### Form Fields

**API Configuration Section:**

```php
TextInput::make('api_token')  // Fathom API token (password, revealable)
TextInput::make('site_id')    // Fathom Site ID (e.g., ABCDEFGH)
```

**Advanced Settings Section (collapsed):**

```php
TextInput::make('base_url')   // API base URL (default: https://api.usefathom.com/v1)
Select::make('timezone')      // Timezone selector (searchable, all PHP timezones)
```

### Navigation

- Group: `filament-metrics-fathom::metrics-fathom.navigation_group`
- Label: `filament-metrics-fathom::metrics-fathom.navigation_label`
- Icon: `heroicon-o-chart-bar-square`

## Widgets

All 7 widgets are registered when `widgets()` is enabled (default). Each widget includes:

- Automatic error handling with user-friendly messages
- "Not Configured" state when API token is missing
- Built-in caching to respect Fathom API rate limits (10 req/min)
- Multi-language support (English and Portuguese)

### Current Visitors Widget
- Type: Stats Overview
- Polls every 30 seconds for real-time data
- Shows current visitor count and top pages being viewed

### Pageviews Chart Widget
- Type: Line Chart
- Shows visits and pageviews over the last 30 days

### Top Pages Widget
- Type: Table
- Displays most visited pages with visit and pageview counts

### Top Referrers Widget
- Type: Table
- Shows traffic sources with visit and unique visitor counts

### Top Browsers Widget
- Type: Doughnut Chart
- Visualizes browser distribution among visitors

### Top Countries Widget
- Type: Table
- Lists visitor countries with visit and unique visitor counts

### Top Devices Widget
- Type: Doughnut Chart
- Shows device type distribution (desktop, mobile, tablet)

## Localization

Translations are provided for English and Brazilian Portuguese (`pt_BR`):

```bash
php artisan vendor:publish --tag="filament-metrics-fathom-translations"
```

## Troubleshooting

### Widgets show "Not Configured"
**Cause**: The Fathom API token or Site ID has not been configured in the settings page.
**Solution**: Navigate to the Fathom settings page in your panel and enter your API token and Site ID.

### API rate limit errors
**Cause**: Fathom API has a rate limit of 10 requests per minute.
**Solution**: The plugin includes built-in caching. If issues persist, check that caching is properly configured in your Laravel application.

### Settings page not visible
**Cause**: Plugin not registered, or `settingsPage(false)` was called.
**Solution**: Ensure `FathomMetricsPlugin::make()` is registered and `settingsPage()` is not set to `false`.

### Widgets not appearing on dashboard
**Cause**: `widgets(false)` was called, or the plugin is not registered.
**Solution**: Ensure the plugin is registered and `widgets()` is not set to `false`. Widgets appear on the default Filament dashboard.

### Migration errors
**Cause**: The settings migration has not been published from the base package.
**Solution**: Run `php artisan vendor:publish --tag="metrics-fathom-settings"` followed by `php artisan migrate`.
