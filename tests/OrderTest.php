<?php

namespace Order\Tests;

use Order\Beer;
use Order\Cigar;
use Order\Order;
use Order\Water;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function testCalculateOrderSubTotal(): void
    {
        $order = new Order();
        $order->addItem(new Cigar('Marlboro', 10.0));
        $order->addItem(new Beer('Itaipava', 5.0));
        $order->addItem(new Water('Crystal 300ml', 2.0));

        $subTotal = $order->getSubTotal();

        $this->assertEquals('17', $subTotal);
    }

    public function testCalculateOrderTaxes(): void
    {
        $order = new Order();
        $order->addItem(new Cigar('Marlboro', 10.0));
        $order->addItem(new Beer('Itaipava', 5.0));
        $order->addItem(new Water('Crystal 300ml', 2.0));

        $taxes = $order->getTaxes();

        $this->assertEquals('2.5', $taxes);
    }

    public function testCalculateOrderTotal(): void
    {
        $order = new Order();
        $order->addItem(new Cigar('Marlboro', 10.0));
        $order->addItem(new Beer('Itaipava', 5.0));
        $order->addItem(new Water('Crystal 300ml', 2.0));

        $total = $order->getTotal();

        $this->assertEquals('19.5', $total);
    }
}
