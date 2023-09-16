<?php

namespace App\Models;

use App\Models\Imovel;
use App\Models\Distrito;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cidade extends Model
{
    use HasFactory;

    protected $gaurded = [];

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'id_distrito', 'id');
    }

    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'id_cidade', 'id');
    }
}
