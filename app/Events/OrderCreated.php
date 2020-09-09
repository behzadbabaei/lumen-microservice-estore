<?php

namespace App\Events;

use App\Order;

class OrderCreated extends Event
{
    /**
     * @var Order
     */
    public $order;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

}
