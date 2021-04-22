<?php

namespace App\Repository;

class StarOnCommand implements IMessage
{
    protected $messageCommand;

    public function __construct($StarOnCommand_in)
    {
        $this->messageCommand = $StarOnCommand_in;
    }

    public function execute()
    {
        $this->messageCommand->setStarsOn();
    }
}
