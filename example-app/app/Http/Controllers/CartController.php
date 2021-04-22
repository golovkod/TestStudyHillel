<?php

namespace App\Http\Controllers;

use App\Repository\Cart;
use App\Repository\Purchare;

class CartController extends Controller
{
    public function index()
    {
        $cart = new Cart;
        $cart->addPurchase(new Purchare(10));
        $cart->addPurchase(new Purchare(15));
        var_dump($cart->getCost());
        foreach ($cart as $purchase)
        {
            var_dump($purchase->getCost());
        }
    }
}
