<?php

namespace  App\Repository;

class MessageStrategyExclaim implements IMessageStrategy
{
    public function showMessage($message_in)
    {
        $message = $message_in->getMessage();
        return Str_replace(' ', '!', $message);
    }
}
