<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contragents extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_contragents',
        'name_contragents',
    ];
}
