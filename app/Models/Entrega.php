<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entrega extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'materiale_id',
        'cantidad',
        'fecha'

    ];

    public function materiales()
    {
        return $this->HasMany(Materiale::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
