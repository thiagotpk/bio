<?php

namespace App\Http\Controllers;

use App\Unidade;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class UnidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('unidades.lista');
    }

    public function novo()
    {
        return view('unidades.formulario');
    }

    public function salvar(Request $request)
    {
        $unidade = new Unidade();

        $unidade = $unidade->create($request->all());

        \Session::flash('mensagem_sucesso', 'Unidade cadastrada com sucesso!');

        return Redirect::to('unidades/novo');

    }
}
