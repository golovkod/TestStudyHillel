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
     *     description="Description of API",
     *     tags={"Order"},
     *     @OA\Response(
     *        response="200",
     *        description="Successful response",
     *       @OA\JsonContent(
     *          @OA\Property(
     *           property="data",
     *           type="array",
     *           @OA\Items(
     *               type="object",
     *               format="query",
     *               @OA\Property(property="id", type="integer", example=4),
     *               @OA\Property(property="name_contragents", type="string", example="test"),
     *               @OA\Property(property="allsum", type="integer", example=600)
     *              ),
     *          ),
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
     *          @OA\Property(
     *           property="data",
     *           type="array",
     *           @OA\Items(
     *               type="object",
     *               format="query",
     *               @OA\Property(property="id", type="integer", example=2),
     *               @OA\Property(property="id_orders", type="integer", example=444),
     *               @OA\Property(property="id_goods", type="integer", example=311),
     *               @OA\Property(property="quantity", type="integer", example=2),
     *               @OA\Property(property="data_update", type="string", example="2021-03-28 20:54:00"),
     *               @OA\Property(property="name", type="string", example="keyboard"),
     *               @OA\Property(property="price", type="integer", example=250)
     *              ),
     *          ),
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
