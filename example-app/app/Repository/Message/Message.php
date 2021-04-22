<?php

namespace App\Repository;

class Message
{
    private $message;

    public function __construct($message_in)
    {
        $this->setMessage($message_in);
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($message_in)
    {
        $this->message = $message_in;
    }

    public function setStarsOn()
    {
        $this->setMessage(Str_replace(' ', '*', $this->getMessage()));
    }
}
