<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function materiale(): BelongsTo
    {
        return $this->belongsTo(Materiale::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ordenes(): HasMany
    {
        return $this->hasMany(Ordene::class);
    }
}
