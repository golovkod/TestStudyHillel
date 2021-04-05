<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function sumOfAllOrders()
    {
        return DB::select('SELECT Contragents.id, Contragents.name_contragents, SUM(Orders.quantity * Goods.price) AS
                           allsum FROM Orders, Goods, Contragents
                           WHERE Orders.id_goods = Goods.id_goods AND Contragents.id_contragents = Orders.id_contragents
                           GROUP BY Orders.id_contragents');
    }

    public function findOrderByContragent()
    {
        return DB::select('SELECT * FROM Orders INNER JOIN Goods on Goods.id_goods=Orders.id_goods
                    WHERE Orders.id_contragents=123');
    }
}
