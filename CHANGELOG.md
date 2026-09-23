# Changelog

All notable changes to `filament-metrics-fathom` will be documented in this file.

## 2.2.0 - 2026-09-23

### Changed

- **Built on `filament-analytics-core`:** the plugin now extends `AbstractAnalyticsPlugin` and depends on `jeffersongoncalves/filament-analytics-core` (matching major), like the other analytics plugins. `filament/spatie-laravel-settings-plugin` now comes in through that package. The plugin id, the `settingsPage()` API and the defaults are unchanged.
- On the 1.x branch of filament-cookie-consent and filament-metrics-matomo, the PHP requirement is now `^8.2`, which analytics-core already required.

### What's Changed

* ci: standardize tests workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/23
* refactor: build on filament-analytics-core (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/26

**Full Changelog**: https://github.com/jeffersongoncalves/filament-metrics-fathom/compare/2.1.0...2.2.0

## 2.1.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#20)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/6
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/9
* ci: standardize update-changelog workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/11
* ci: standardize tests workflow (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/17
* build(deps): bump the actions-deps group with 2 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/15
* feat(i18n): add translations (2.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-metrics-fathom/pull/20

**Full Changelog**: https://github.com/jeffersongoncalves/filament-metrics-fathom/compare/v2.0.1...2.1.0

## v2.0.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^4.8`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^4.8`

## v2.0.0 - 2026-03-02

### Filament v4 Support

#### Breaking Changes

- Requires Filament ^4.0 (upgraded from ^3.0)
- SettingsPage migrated from `Form` to `Schema` (`Filament\Schemas\Schema`)
- `Section` component moved to `Filament\Schemas\Components\Section`
- Widget properties changed from static to instance (`$pollingInterval`, `$maxHeight`, `$view`)
- Navigation icon type updated to `string|BackedEnum|null`
- Navigation group return type updated to `string|UnitEnum|null`

#### Changes

- Narrowed dev dependencies: larastan ^3.0, pest ^3.0, testbench ^9.0|^10.0
- Cleaned PHPStan baseline (view-string error no longer needed)

#### Requirements

- PHP ^8.2
- Filament ^4.0
- Laravel 11.x+
- Livewire 3.x

## Unreleased
