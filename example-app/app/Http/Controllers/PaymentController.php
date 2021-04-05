<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function paid()
    {
        return DB::select('SELECT * FROM Payment WHERE status_payment = 1');
    }
}
