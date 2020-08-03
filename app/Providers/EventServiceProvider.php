<?php

namespace App\Providers;

use App\Events\OnArticlepublish;
use App\Events\OnsubscribeNewletter;
use App\Listeners\OnArticlepublishListener;
use App\Listeners\OnsubscribeNewletterListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        OnsubscribeNewletter::class=>[
            OnsubscribeNewletterListener::class,
        ],
        OnArticlepublish::class=>[
            OnArticlepublishListener::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
