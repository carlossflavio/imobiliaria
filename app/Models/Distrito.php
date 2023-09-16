<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function cidades()
    {
        return $this->hasMany(Cidade::class, 'id_distrito', 'id');
    }

}
