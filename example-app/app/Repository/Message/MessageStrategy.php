<?php

namespace  App\Repository;

class MessageStrategy
{
    private $strategy = null;

    public function selectStrategy($strategy_ind_id)
    {
        switch ($strategy_ind_id) {
            case "C":
                return $this->strategy = new MessageStrategyCaps();
            case "E":
                return $this->strategy = new MessageStrategyExclaim();
        }
    }

    public function showContext($message)
    {
        return $this->strategy->showMessage($message);
    }
}
