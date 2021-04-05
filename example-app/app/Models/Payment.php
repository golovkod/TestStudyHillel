<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_payment',
        'data_update'
    ];

    public function orders()
    {

        return $this->belongsToMany(Orders::class);
    }
}
