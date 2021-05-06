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
     *     description="Description of API",
     *     tags={"Contragents"},
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
     *               @OA\Property(property="id", type="integer", example=5),
     *               @OA\Property(property="id_contragents", type="integer", example=321),
     *               @OA\Property(property="name_contragents", type="string", example="DNS"),
     *               @OA\Property(property="data_update", type="string", example="2021-03-28 20:54:00")
     *              ),
     *          ),
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
