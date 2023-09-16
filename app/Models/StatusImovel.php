<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusImovel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function imoveis()
    {
        return $this->hasMany(Imovel::class, 'id_status_imovel', 'id');
    }

}
