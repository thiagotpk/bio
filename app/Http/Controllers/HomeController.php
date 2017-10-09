<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function perfil()
    {
        $perfil = Auth::user()->id;

        $perfil2 = User::findOrFail($perfil);

        return view('perfil', ['perfil' => $perfil2]);
    }

    public function atualizar($id, Request $request){

        $perfil = User::findOrFail($id);

        $perfil->update($request->all());

        \Session::flash('mensagem_sucesso', 'Perfil atualizado com sucesso!');

        return Redirect::to('perfil/editar');
    }
}
