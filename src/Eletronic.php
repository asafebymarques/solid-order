<?php

namespace Order;

class Beer extends TaxItem
{
    public function __construct(string $description, float $price)
    {
        parent::__construct('Eletronic', $description, $price);
    }

    public function getTax(): float
    {
        return 0.5;
    }
}
