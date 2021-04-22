<?php

namespace App\Http\Controllers;

use App\Repository\Customer;
use App\Repository\Purchare;

class PurchareController extends Controller
{
    public function index()
    {
        $purchase = new Purchare(250);
        $leha = new Customer('Leha');
        $daniil = new Customer('Daniil');
        $valera = new Customer('Valera');
        $purchase->attach($leha);
        $purchase->attach($daniil);
        $purchase->attach($valera);
        $purchase->detach($valera);
        $purchase->breakOutPrice(100);
    }
}
