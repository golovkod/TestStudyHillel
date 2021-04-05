<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_orders',
        'quantity'
    ];

    public function contragents()
    {

        return $this->belongsToMany(Contragents::class);
    }

    public function goods()
    {

        return $this->belongsToMany(Goods::class);
    }
}
