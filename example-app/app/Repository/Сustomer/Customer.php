<?php
namespace App\Repository;

use SplObserver;

class Customer implements SplObserver
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject)
    {
        echo $this->name.' FAST BUY IT, new price is -  <b>'.$subject->getCost().'</b><br>';
    }

}
