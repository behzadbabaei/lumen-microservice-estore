<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class OrderCreatedListener implements ShouldQueue
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  $event
     * @return void
     */
    public function handle($event)
    {
        Log::info('Order created on estore:' . json_encode($event));
    }
}
