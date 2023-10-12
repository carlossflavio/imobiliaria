<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoImovel extends Model
{
    use HasFactory;
<<<<<<< HEAD
=======


    protected $guarded = [];

    public function Imoveis()
    {
        return $this->hasMany(Imovel::class, 'id_imovel');
    }

>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
}
