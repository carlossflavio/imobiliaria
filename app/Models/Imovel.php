<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $guarded = [];

    protected $casts = [
        'imagens_outras' => 'array',
        'recursos_opcionais' => 'array',
        'informacoes_casa' => 'array',
        'informacoes_apartamento' => 'array',
        'informacoes_terreno' => 'array',
=======

    protected $guarded = [];

    protected $casts = [
        'imagens' => 'array',
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'id_cidade');
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'id_distrito');
    }

<<<<<<< HEAD
    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }
}

=======
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
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085
