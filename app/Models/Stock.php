<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'fecha',
        'materiale_id',
        'user_id'
    ];

    public function material()
    {
        return $this->belongsTo('App\Models\Materiale');
    }
}
