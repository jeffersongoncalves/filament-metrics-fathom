# Changelog

All notable changes to `filament-metrics-fathom` will be documented in this file.

## v1.0.0 - 2026-03-02

### Initial Release (Filament v3)

#### Features

- Settings page to configure Fathom API credentials directly from the panel
- 7 dashboard widgets: Current Visitors, Pageviews Chart, Top Pages, Top Referrers, Top Browsers, Top Countries, Top Devices
- Real-time visitor count with automatic polling (every 30s)
- Built-in caching to respect Fathom API rate limits (10 req/min)
- Multi-language support (English and Brazilian Portuguese)
- Fully configurable: enable/disable settings page and widgets independently

#### Requirements

- PHP ^8.2
- Filament ^3.0
- Laravel 10.x / 11.x
- Livewire 3.x

## Unreleased
