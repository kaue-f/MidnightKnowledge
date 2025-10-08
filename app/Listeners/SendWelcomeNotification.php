<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWelcomeNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        notify($event->user)->info(
            title: 'notification-messages.welcome.title',
            message: 'notification-messages.welcome.message',
            params: ['name' => $event->user->nickname]
        );
    }
}
