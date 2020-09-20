<?php

namespace App\Events;

use App\Order;

class OrderShipped extends Event
{
    public $order;
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

//    public function __serialize()
//    {
//        return ["order" => $this->order, "user" => $this->order->user];
//    }
}
