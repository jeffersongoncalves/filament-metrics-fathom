# Changelog

All notable changes to `filament-metrics-fathom` will be documented in this file.

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
