<?php

namespace JeffersonGoncalves\Filament\MetricsFathom;

use Filament\Panel;
use JeffersonGoncalves\Filament\MetricsFathom\Pages\FathomMetricsSettingsPage;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\CurrentVisitorsWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\PageviewsChartWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopBrowsersWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopCountriesWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopDevicesWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopPagesWidget;
use JeffersonGoncalves\Filament\MetricsFathom\Widgets\TopReferrersWidget;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class FathomMetricsPlugin extends AbstractAnalyticsPlugin
{
    protected bool $hasWidgets = true;

    public function getId(): string
    {
        return 'filament-metrics-fathom';
    }

    protected function getSettingsPageClass(): ?string
    {
        return FathomMetricsSettingsPage::class;
    }

    public function register(Panel $panel): void
    {
        parent::register($panel);

        if ($this->hasWidgets) {
            $panel->widgets([
                CurrentVisitorsWidget::class,
                PageviewsChartWidget::class,
                TopPagesWidget::class,
                TopReferrersWidget::class,
                TopBrowsersWidget::class,
                TopCountriesWidget::class,
                TopDevicesWidget::class,
            ]);
        }
    }

    public function widgets(bool $condition = true): static
    {
        $this->hasWidgets = $condition;

        return $this;
    }
}
