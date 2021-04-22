<?php

namespace App\Http\Controllers;

use App\Repository\Messege;
use App\Repository\MessegeStrategy;
use App\Repository\StarOnCommand;

class MessageController extends Controller
{
    public function indexCommandPattern()
    {
        $messege = new Messege('Command Pattern TEST ');
        echo ($messege->getMessege());
        $starsOn = new StarOnCommand($messege);
        $starsOn->execute();
        echo ($messege->getMessege());
    }

    public function indexStrategyPattern()
    {
        $messege = new Messege('Strategy Pattern TEST ');
        $strategyContextC = new MessegeStrategy('C');
        $strategyContextE = new MessegeStrategy('E');
        echo "C Strategy use - ";
        echo $strategyContextC->showContext($messege);
        echo "E Strategy use - ";
        echo $strategyContextE->showContext($messege);
    }
}
