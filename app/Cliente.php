<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class cliente extends Model
{
    public $timestamps = false;

    protected $fillable = [
    	'nome',
    	'endereco',
    	'numero',
        'unidade_id'
    ];

    public static function todos(){
        $test = DB::table('clientes')->leftjoin('unidades', 'unidades.id', '=', 'clientes.unidade_id')->select('clientes.*','unidades.nome as nomeU')->get();
        return $test;
    }
}

