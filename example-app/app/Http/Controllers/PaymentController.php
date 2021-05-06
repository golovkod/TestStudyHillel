<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * @OA\Get(
 *     path="/api/order/paid",
 *     summary="Get paid",
 *     description="Display a listing of the resource.",
 *     tags={"Paid"},
 *     @OA\Response(
 *        response="200",
 *        description="Successful response",
 *        @OA\JsonContent(
 *          type="object",
 *          example={
 *             "data": {
 *                  {
 *                      "id": 1,
 *                      "id_orders": 978,
 *                      "status_payment": 1,
 *                      "data_update":"2021-03-28 20:55:24"
 *                  }
 *              }
 *          },
 *      )
 *   ),
 * )
 */
class PaymentController extends Controller
{
    public function paid()
    {
        return DB::select('SELECT * FROM Payment WHERE status_payment = 1');
    }
}
