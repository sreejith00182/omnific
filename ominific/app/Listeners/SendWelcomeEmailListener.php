<?php

namespace App\Listeners;

use App\Jobs\SendWelcomeEmail;
use Illuminate\Auth\Events\Registered;

class SendWelcomeEmailListener
{
    /**
     * Handle the event.
     */
    public function handle(Registered $event)
    {
        SendWelcomeEmail::dispatch($event->user);
    }
}
