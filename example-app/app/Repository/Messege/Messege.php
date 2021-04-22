<?php

namespace App\Repository;

class Messege
{
    private $messege;

    public function __construct($messege_in)
    {
        $this->setMessege($messege_in);
    }

    public function getMessege()
    {
        return $this->messege;
    }

    public function setMessege($messege_in)
    {
        $this->messege = $messege_in;
    }

    public function setStarsOn()
    {
        $this->setMessege(Str_replace(' ', '*', $this->getMessege()));
    }
}
