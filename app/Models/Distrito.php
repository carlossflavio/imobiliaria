<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $guarded = [];
=======

    protected $guarded = [];


    public function cidades()
    {
        return $this->hasMany(Cidade::class, 'id_distrito', 'id');
    }

>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
}
