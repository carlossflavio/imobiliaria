<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'imagens' => 'array',
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'id_cidade');
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'id_distrito');
    }

    public function tipoImovel() 
    {
        return $this->belongsTo(TipoImovel::class, 'id_tipo_imovel'); 
    }

    public function statusImovel()
    {
        return $this->belongsTo(StatusImovel::class, 'id_status_imovel');
    }

    public function imagens()
    {
        return $this->hasMany(Imagem::class, 'id_imovel');
    }


}
