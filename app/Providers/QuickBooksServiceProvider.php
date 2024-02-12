<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Socialite\Facades\Socialite;
use SocialiteProviders\Manager\SocialiteWasCalled;

class QuickBooksServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the QuickBooks provider with Socialite
        Socialite::extend('quickbooks', function ($app) {
            return Socialite::buildProvider(\App\Socialite\QuickBooksProvider::class, $app['config']['services.quickbooks']);
        });

        // Trigger the SocialiteWasCalled event to enable auto-discovery
        $this->app->make(SocialiteWasCalled::class);
    }
}
