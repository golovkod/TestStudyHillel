<?php

namespace App\Http\Controllers;

use App\Repository\Cart;
use App\Repository\Purchare;

class CartController extends Controller
{
    public function index()
    {
        $amounts = [10,15,20];
        $cart = new Cart;
        foreach ($amounts as $value) {
            $cart->addPurchase(new Purchare($value));
        }

        var_dump($cart->getCost());

        foreach ($cart as $purchase) {
            var_dump($purchase->getCost());
        }
    }
}
