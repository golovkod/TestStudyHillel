<?php

namespace App\Http\Controllers;

use App\Repository\Customer;
use App\Repository\Purchare;

class PurchareController extends Controller
{
    public function index()
    {
        $names = ['leha','daniil','valera'];
        $purchase = new Purchare(250);

        foreach ($names as $value) {
            $users[] = new Customer($value);
        }

        foreach ($users as $value) {
            $purchase->attach($value);
        }

        $purchase->detach($users[2]);
        $purchase->breakOutPrice(100);
    }
}
