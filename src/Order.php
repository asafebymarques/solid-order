<?php

namespace Order;

class Order
{
    private string $code;

    private $items = [];

    public function __construct()
    {
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item;
    }

    public function getSubTotal()
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->getPrice();
        }

        return $total;
    }

    public function getTaxes()
    {
        $taxes = 0;

        foreach ($this->items as $item) {
            if ($item instanceof TaxItem) {
                $taxes += $item->calculateTaxes();
            }
        }

        return $taxes;
    }

    public function getTotal()
    {
        return $this->getSubTotal() + $this->getTaxes();
    }
}
