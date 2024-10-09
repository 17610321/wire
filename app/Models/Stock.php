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
        'type'
    ];

    public function materiale()
    {
        return $this->belongsTo(Materiale::class);
    }
}
