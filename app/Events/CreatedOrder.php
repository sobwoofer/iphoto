<?php

namespace App\Events;

use App\Eloquent\Order;

/**
 * Class CreatedOrder
 * @property Order $order
 * @package App\Events\States
 */
class CreatedOrder
{
    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}
