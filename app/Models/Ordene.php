<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ordene extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente',
        'entrega_id',
        'cantidad',
        'fecha'
    ];

    public function entrega(): BelongsTo
    {
        return $this->belongsTo(Entrega::class);
    }
}
