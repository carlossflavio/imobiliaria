<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipologia extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tiposImoveis()
    {
        return $this->hasMany(TipoImovel::class, 'id_tipologia');
    }
}
