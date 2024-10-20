<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = [
        'materiale_id',
        'cantidad',
        'fecha'
    ];


    public function materiale(): BelongsTo
    {
        return $this->belongsTo(Materiale::class);
    }
}
