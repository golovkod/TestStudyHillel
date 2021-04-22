<?php

namespace App\Repository;

class StarOnCommand implements IMessege
{
    protected $messegeCommand;

    public function __construct($StarOnCommand_in)
    {
        $this->messegeCommand = $StarOnCommand_in;
    }

    public function execute()
    {
        $this->messegeCommand->setStarsOn();
    }
}
