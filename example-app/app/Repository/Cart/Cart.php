<?php

namespace App\Repository;

use IteratorAggregate;
use ArrayIterator;

class Cart implements IteratorAggregate
{
    protected $purchases;

    public function addPurchase(Purchare $purchase)
    {
        $this->purchases[] = $purchase;
    }

    public function getCost(): int
    {
        $cost = 0;
        foreach ($this->purchases as $purchase)
        {
            $cost += $purchase->getCost();
        }
        return $cost;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->purchases);
    }
}
