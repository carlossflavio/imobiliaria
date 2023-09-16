<?php

namespace App\Models;

use App\Models\Imovel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MultiImagem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ImovelImagens (){

        return $this->belongsTo(Imovel::class,'id_imovel', 'id');
    }
}
