<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class OrderShippedListener implements ShouldQueue
{

    public $connection = 'rabbitmq_direct';


    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

        $randomNumber = rand(0, 1);
        $queueKeys = ['email.service1', 'email.service2'];
        $routingKeys = ['email1', 'email2'];
        config([
            'queue.connections.rabbitmq_direct.queue' => $queueKeys[$randomNumber],
            'queue.connections.rabbitmq_direct.options.queue.exchange_routing_key' => $routingKeys[$randomNumber]
        ]);
    }

    /**
     * Handle the event.
     *
     * @param  $event
     * @return void
     */
    public function handle($event)
    {
        Log::info('Order shipped from e-store:' . json_encode($event));
    }

}
