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
        $unidades= Unidade::get();
        return view('unidades.lista', ['unidades'=>$unidades]);
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

    public function editar($id){

        $unidade = Unidade::findOrFail($id);

        return view('unidades.formulario', ['unidade' => $unidade]);
    }

    public function atualizar($id, Request $request){

        $unidade = Unidade::findOrFail($id);

        $unidade->update($request->all());

        \Session::flash('mensagem_sucesso', 'Unidade atualizada com sucesso!');

        return Redirect::to('unidades/'.$unidade->id.'/editar');
    }

    public function deletar($id){

        $unidade = Unidade::findOrFail($id);

        $unidade->delete();

        \Session::flash('mensagem_sucesso', 'Unidade deletada com sucesso!');

        return Redirect::to('unidades');

    }
}
