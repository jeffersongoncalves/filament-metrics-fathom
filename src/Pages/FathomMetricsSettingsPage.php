<?php

namespace JeffersonGoncalves\Filament\MetricsFathom\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;
use JeffersonGoncalves\MetricsFathom\Settings\FathomSettings;

class FathomMetricsSettingsPage extends SettingsPage
{
    protected static string $settings = FathomSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar-square';

    public static function getNavigationGroup(): ?string
    {
        return AbstractAnalyticsPlugin::navigationGroupFor('filament-metrics-fathom') ?? __('filament-metrics-fathom::metrics-fathom.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-metrics-fathom::metrics-fathom.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-metrics-fathom::metrics-fathom.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-metrics-fathom::metrics-fathom.sections.api_configuration'))
                    ->schema([
                        TextInput::make('api_token')
                            ->label(__('filament-metrics-fathom::metrics-fathom.fields.api_token.label'))
                            ->helperText(__('filament-metrics-fathom::metrics-fathom.fields.api_token.helper'))
                            ->password()
                            ->revealable()
                            ->required(),

                        TextInput::make('site_id')
                            ->label(__('filament-metrics-fathom::metrics-fathom.fields.site_id.label'))
                            ->helperText(__('filament-metrics-fathom::metrics-fathom.fields.site_id.helper'))
                            ->placeholder('ABCDEFGH')
                            ->required(),
                    ]),

                Section::make(__('filament-metrics-fathom::metrics-fathom.sections.advanced_settings'))
                    ->schema([
                        TextInput::make('base_url')
                            ->label(__('filament-metrics-fathom::metrics-fathom.fields.base_url.label'))
                            ->helperText(__('filament-metrics-fathom::metrics-fathom.fields.base_url.helper'))
                            ->url()
                            ->default('https://api.usefathom.com/v1'),

                        Select::make('timezone')
                            ->label(__('filament-metrics-fathom::metrics-fathom.fields.timezone.label'))
                            ->helperText(__('filament-metrics-fathom::metrics-fathom.fields.timezone.helper'))
                            ->options(array_combine(
                                timezone_identifiers_list(),
                                timezone_identifiers_list(),
                            ))
                            ->searchable(),
                    ])
                    ->collapsed(),
            ]);
    }
}
