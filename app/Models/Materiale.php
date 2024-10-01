<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiale extends Model
{
    use HasFactory;

    protected $fillable=[
        'sku',
        'name',
        'descripcion',
        'user_id'

    ];

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }


}
