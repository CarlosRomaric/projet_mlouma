<?php

namespace App\Providers;

use App\Utilities\NewSmsAPI;
use Illuminate\Support\ServiceProvider;


class NewSmsAPIServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $token = 
        $this->app->bind(NewSmsAPI::class, function ($app) {
            return new NewSmsAPI();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
