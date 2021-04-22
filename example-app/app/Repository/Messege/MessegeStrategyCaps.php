<?php

namespace App\Repository;

class MessegeStrategyCaps implements IMessegeStrategy
{
    public function showMessege($messege_in)
    {
        $messege = $messege_in->getMessege();
        return strtoupper($messege);
    }
}
