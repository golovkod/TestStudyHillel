<?php

namespace  App\Repository;

class MessegeStrategy
{
    private $strategy = null;

    public function __construct($strategy_ind_id)
    {
        switch ($strategy_ind_id) {
            case "C":
                $this->strategy = new MessegeStrategyCaps();
                break;
            case "E":
                $this->strategy = new MessegeStrategyExclaim();
                break;
        }
    }

    public function showContext($messege)
    {
        return $this->strategy->showMessege($messege);
    }
}
