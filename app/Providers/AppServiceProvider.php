<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;
use Filament\Navigation\NavigationGroup;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                     ->label('Kassa')
                     ->icon('heroicon-o-cash'),
                NavigationGroup::make()
                    ->label('Basisdaten')
                    ->icon('heroicon-s-pencil'),
                NavigationGroup::make()
                    ->label('Sicherheit')
                    ->icon('heroicon-s-cog')
                    ->collapsed(),
                NavigationGroup::make()
                    ->label('Import')
                    ->icon('heroicon-s-inbox')
                    ->collapsed(),
                // NavigationItem::make('Analytics')
                //     ->url('https://filament.pirsch.io', shouldOpenInNewTab: true)
                //     ->icon('heroicon-o-presentation-chart-line')
                //     ->group('Reports')
                //     ->sort(3),

            ]);
        });
    }
}
