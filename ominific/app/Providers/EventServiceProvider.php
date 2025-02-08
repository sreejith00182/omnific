<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use App\Jobs\SendWelcomeEmail;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     */
    protected $listen = [
        Registered::class => [
            SendWelcomeEmailListener::class,
        ],
    ];
}

