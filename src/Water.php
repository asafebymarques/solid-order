<?php

namespace Order;

class Water extends Item
{
    public function __construct(string $description, float $price)
    {
        parent::__construct('Water', $description, $price);
    }
}
