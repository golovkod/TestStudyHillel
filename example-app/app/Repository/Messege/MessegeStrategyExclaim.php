<?php

namespace  App\Repository;

class MessegeStrategyExclaim implements IMessegeStrategy
{
    public function showMessege($messege_in)
    {
        $messege = $messege_in->getMessege();
        return Str_replace(' ', '!', $messege);
    }
}
