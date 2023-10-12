<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
=======
use App\Models\Imovel;
use App\Models\Distrito;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

class Cidade extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $guarded = [];
=======

    protected $gaurded = [];

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'id_distrito', 'id');
    }

    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'id_cidade', 'id');
    }
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
}
