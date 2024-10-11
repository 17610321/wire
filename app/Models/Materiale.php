<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku',
        'name',
        'descripcion',
        'user_id',
        'stock'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function entregas()
    {
        return $this->hasMany(Entrega::class);
    }
}
