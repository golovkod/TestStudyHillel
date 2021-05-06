<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/order/paid",
     *     summary="Get paid",
     *     description="Description of API",
     *     tags={"Paid"},
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
     *               @OA\Property(property="id", type="integer", example=1),
     *               @OA\Property(property="status_payment", type="integer", example=1),
     *               @OA\Property(property="data_update", type="string", example="2021-03-28 20:54:00")
     *              ),
     *          ),
     *      )
     *   ),
     * )
     */
    public function paid()
    {
        return DB::select('SELECT * FROM Payment WHERE status_payment = 1');
    }
}
