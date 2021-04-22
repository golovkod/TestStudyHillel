<?php

namespace App\Repository;

use SplObserver;
use SplSubject;

class Purchare implements SplSubject
{
    protected int $cost;
    private $observers = array();

    public function __construct($cost)
    {
        $this->cost = $cost;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);

        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }

    public function breakOutPrice($cost)
    {
        $this->cost = $cost;
        $this->notify();
    }
}
