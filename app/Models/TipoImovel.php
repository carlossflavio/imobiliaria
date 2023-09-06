<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoImovel extends Model
{
    use HasFactory;


    protected $guarded = [];

    public function tipologia()
    {
        return $this->belongsTo(Tipologia::class, 'id_tipologia');
    }

}
