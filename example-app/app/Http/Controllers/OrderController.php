<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class OrderController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/order/sum-all-orders",
     *     summary="Get sum of all orders",
     *     description="Display a listing of the resource.",
     *     tags={"Order"},
     *     @OA\Response(
     *        response="200",
     *        description="Successful response",
     *        @OA\JsonContent(
     *          type="object",
     *          example={
     *             "data": {
     *                  {
     *                      "id": 4,
     *                      "name_contragents": "TEST",
     *                      "allsum": 600
     *                  }
     *              }
     *          },
     *      )
     *   ),
     * )
     */
    public function sumOfAllOrders()
    {
        return DB::select('SELECT Contragents.id, Contragents.name_contragents, SUM(Orders.quantity * Goods.price) AS
                           allsum FROM Orders, Goods, Contragents
                           WHERE Orders.id_goods = Goods.id_goods AND Contragents.id_contragents = Orders.id_contragents
                           GROUP BY Orders.id_contragents');
    }

    /**
     * @OA\Get(
     *     path="/api/order/findbycontragent",
     *     summary="Get order by contragent",
     *     description="Display a listing of the resource.",
     *     tags={"Order"},
     *     @OA\Response(
     *        response="200",
     *        description="Successful response",
     *        @OA\JsonContent(
     *          type="object",
     *          example={
     *             "data": {
     *                  {
     *                      "id": 4,
     *                      "id_orders": 444,
     *                      "id_goods": 431,
     *                      "quantity": 2,
     *                      "id_contragents":123,
     *                      "data_update":"2021-03-28 20:54:21",
     *                      "name":"keyboard",
     *                      "price":300
     *                  }
     *              }
     *          },
     *      )
     *   ),
     * )
     */
    public function findOrderByContragent()
    {
        return DB::select('SELECT * FROM Orders INNER JOIN Goods on Goods.id_goods=Orders.id_goods
                    WHERE Orders.id_contragents=123');
    }
}
