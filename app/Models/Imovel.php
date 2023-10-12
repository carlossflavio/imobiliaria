<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'imagens_outras' => 'array',
        'recursos_opcionais' => 'array',
        'informacoes_casa' => 'array',
        'informacoes_apartamento' => 'array',
        'informacoes_terreno' => 'array',
    ];

    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'id_cidade');
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::class, 'id_distrito');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status');
    }
}

