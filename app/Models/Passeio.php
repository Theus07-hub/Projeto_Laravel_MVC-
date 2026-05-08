<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Passeio extends Model
{
    //

    protected $fillable = [
        'nome_pet',
        'responsavel',
        'data',
        'horario',
    ];

}
