<?php

namespace App\Providers;

use App\Events\UserLoggedIn;
use App\Listeners\RevokeToken;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

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
        // it's important for run and bind the events with listeners 
        Event::listen(
            UserLoggedIn::class,
            RevokeToken::class
        );
    }
}
