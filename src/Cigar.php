<?php

namespace Order;

class Cigar extends TaxItem
{
    public function __construct(string $description, float $price)
    {
        parent::__construct('Cigar', $description, $price);
    }

    public function getTax(): float
    {
        return 0.2;
    }
}
