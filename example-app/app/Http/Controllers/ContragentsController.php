<?php

namespace App\Http\Controllers;

use App\Models\Contragents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ContragentsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/contragents/find-duplicate",
     *     summary="Get duplicate contragents",
     *     description="Display a listing of the resource.",
     *     tags={"Contragents"},
     *     @OA\Response(
     *        response="200",
     *        description="Successful response",
     *        @OA\JsonContent(
     *          type="object",
     *          example={
     *             "data": {
     *                  {
     *                      "id": 5,
     *                      "id_contragents": 321,
     *                      "name_contragents": "DNS",
     *                      "data_update": "2021-03-28 20:54:00"
     *                  }
     *              }
     *          },
     *      )
     *   ),
     * )
     */

    public function findDuplicate()
    {
       return DB::select('SELECT * FROM Contragents WHERE name_contragents IN
        (SELECT name_contragents  FROM Contragents GROUP BY name_contragents HAVING COUNT(name_contragents) > 1)');
    }


}
