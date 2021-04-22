<?php

namespace App\Http\Controllers;

use App\Repository\Message;
use App\Repository\MessageStrategy;
use App\Repository\StarOnCommand;

class MessageController extends Controller
{
    public function indexCommandPattern()
    {
        $message = new Message('Command Pattern TEST ');
        echo ($message->getMessage());
        $starsOn = new StarOnCommand($message);
        $starsOn->execute();
        echo ($message->getMessage());
    }

    public function indexStrategyPattern()
    {
        $message = new Message('Strategy Pattern TEST ');
        $strategyContext = new MessageStrategy();
        $strategyContextC = $strategyContext->selectStrategy('C');
        $strategyContextE = $strategyContext->selectStrategy('E');
        echo "C Strategy use - ";
        echo $strategyContextC->showMessage($message);
        echo "E Strategy use - ";
        echo $strategyContextE->showMessage($message);
    }
}
