# Changelog

All notable changes to `filament-metrics-fathom` will be documented in this file.

## 1.2.0 - 2026-09-23

### Changed

- **Built on `filament-analytics-core`:** the plugin now extends `AbstractAnalyticsPlugin` and depends on `jeffersongoncalves/filament-analytics-core` (matching major), like the other analytics plugins. `filament/spatie-laravel-settings-plugin` now comes in through that package. The plugin id, the `settingsPage()` API and the defaults are unchanged.
- On the 1.x branch of filament-cookie-consent and filament-metrics-matomo, the PHP requirement is now `^8.2`, which analytics-core already required.

### What's Changed

* ci: standardize tests workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/22
* refactor: build on filament-analytics-core (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/25

**Full Changelog**: https://github.com/jeffersongoncalves/filament-metrics-fathom/compare/1.1.0...1.2.0

## 1.1.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#19)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/5
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/8
* ci: standardize update-changelog workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/10
* ci: standardize tests workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/16
* build(deps): bump the actions-deps group with 2 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/14
* feat(i18n): add translations (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/19

**Full Changelog**: https://github.com/jeffersongoncalves/filament-metrics-fathom/compare/v1.0.0...1.1.0

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
