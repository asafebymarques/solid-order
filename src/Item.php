<?php

namespace Order;

abstract class Item
{
    private string $category;

    private string $description;

    private float $price;

    public function __construct(string $category, string $description, float $price)
    {
        $this->category = $category;
        $this->description = $description;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
