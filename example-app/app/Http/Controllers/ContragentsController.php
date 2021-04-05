<?php

namespace App\Http\Controllers;

use App\Models\Contragents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContragentsController extends Controller
{
    public function findDuplicate()
    {
       return DB::select('SELECT * FROM Contragents WHERE name_contragents IN
        (SELECT name_contragents  FROM Contragents GROUP BY name_contragents HAVING COUNT(name_contragents) > 1)');
    }


}
