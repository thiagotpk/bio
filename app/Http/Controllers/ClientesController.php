<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Unidade;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::todos();
        $clientes2 = Cliente::get();
    	return view('clientes.lista', ['clientes'=>$clientes, 'clientes2'=>$clientes2]);
    }

    public function novo()
    {
        $unidades = Unidade::all(['id', 'nome'])->pluck('nome', 'id');
    	return view('clientes.formulario', ['unidades'=>$unidades]);
    }

    public function salvar(Request $request)
    {
    	$cliente = new Cliente();

    	$cliente = $cliente->create($request->all());

    	\Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso!');

    	return Redirect::to('clientes/novo');

    }

    public function editar($id){

        $cliente = Cliente::findOrFail($id);
        $unidades = Unidade::all(['id', 'nome'])->pluck('nome', 'id');
        return view('clientes.formulario', ['cliente' => $cliente, 'unidades'=>$unidades]);
    }

    public function atualizar($id, Request $request){

        $cliente = Cliente::findOrFail($id);

        $cliente->update($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente atualizado com sucesso!');

        return Redirect::to('clientes/'.$cliente->id.'/editar');
    }

    public function deletar($id){

        $cliente = Cliente::findOrFail($id);

        $cliente->delete();

        \Session::flash('mensagem_sucesso', 'Cliente deletado com sucesso!');

        return Redirect::to('clientes');

    }
}
