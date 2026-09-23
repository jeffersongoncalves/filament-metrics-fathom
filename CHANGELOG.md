# Changelog

All notable changes to `filament-metrics-fathom` will be documented in this file.

## 3.2.0 - 2026-09-23

### Changed

- **Built on `filament-analytics-core`:** the plugin now extends `AbstractAnalyticsPlugin` and depends on `jeffersongoncalves/filament-analytics-core` (matching major), like the other analytics plugins. `filament/spatie-laravel-settings-plugin` now comes in through that package. The plugin id, the `settingsPage()` API and the defaults are unchanged.
- On the 1.x branch of filament-cookie-consent and filament-metrics-matomo, the PHP requirement is now `^8.2`, which analytics-core already required.

### What's Changed

* ci: standardize tests workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/24
* refactor: build on filament-analytics-core (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/27
* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/28

**Full Changelog**: https://github.com/jeffersongoncalves/filament-metrics-fathom/compare/3.1.0...3.2.0

## 3.1.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#21)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* build(deps): bump ramsey/composer-install from 3 to 4 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/1
* build(deps): bump dependabot/fetch-metadata from 2.5.0 to 3.0.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/2
* build(deps): bump actions/checkout from 6 to 7 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/3
* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/4
* chore: add GitHub Sponsors to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/7
* ci: standardize update-changelog workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/12
* ci: standardize dependabot config by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/13
* ci: standardize tests workflow (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/18
* feat(i18n): add translations (3.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/21

**Full Changelog**: https://github.com/jeffersongoncalves/filament-metrics-fathom/compare/v3.0.1...3.1.0

## v3.0.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^5.3`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^5.3`

## v3.0.0 - 2026-03-02

### Filament v5 Support

#### Breaking Changes

- Requires Filament ^5.0 (upgraded from ^4.0)
- Requires Livewire 4.x (resolved automatically via Filament v5)

#### Changes

- Added testbench ^11.0 support for future Laravel versions
- Cleaned PHPStan baseline completely (all view-string errors resolved natively)

#### Requirements

- PHP ^8.2
- Filament ^5.0
- Laravel 11.x+
- Livewire 4.x

## Unreleased
