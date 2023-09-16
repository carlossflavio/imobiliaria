<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoImovel extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function Imoveis()
    {
        return $this->hasMany(Imovel::class, 'id_imovel');
    }

}
