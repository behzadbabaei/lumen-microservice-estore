<?php

namespace App\Events;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

abstract class Event
{
    use SerializesModels,InteractsWithQueue;
}
