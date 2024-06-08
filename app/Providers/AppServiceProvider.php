<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Define o comprimento padrão das strings do esquema do Laravel
        // para evitar erros ao criar índices únicos em campos longos.
        Schema::defaultStringLength(191);
    }
}
