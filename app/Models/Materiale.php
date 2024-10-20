<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }

    public function entregas(): HasMany
    {
        return $this->hasMany(Entrega::class);
    }
}
