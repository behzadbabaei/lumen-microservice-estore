<?php

namespace App\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \App\Events\OrderCreated::class => [
            \App\Listeners\OrderCreatedListener::class,
        ],
        \App\Events\OrderShipped::class => [
            \App\Listeners\OrderShippedListener::class,
        ],
    ];
}
