<?php

namespace Order;

abstract class TaxItem extends Item
{
    public function __construct(string $category, string $description, float $price)
    {
        parent::__construct($category, $description, $price);
    }

    public function calculateTaxes(): float
    {
        return $this->getPrice() * $this->getTax();
    }

    abstract public function getTax(): float;
}
