<?php

namespace App\Repository;

class MessageStrategyCaps implements IMessageStrategy
{
    public function showMessage($message_in)
    {
        $message = $message_in->getMessage();
        return strtoupper($message);
    }
}
