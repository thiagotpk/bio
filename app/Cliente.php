<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public $timestamps = false;

    protected $fillable = [
    	'nome',
    	'endereco',
    	'numero',
        'unidade_id'
    ];
}

