<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade'
    ];
}
