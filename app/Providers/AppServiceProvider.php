<?php

namespace App\Providers;

use Filament\Facades\Filament;
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
        // Filament::registerPages([
        //     \RyanChandler\FilamentProfile\Pages\Profile::class
        // ]);
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
            ]);
        });
    }
}
