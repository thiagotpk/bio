@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Unidades
                	<a class="pull-right" href="{{ url('unidades/novo') }}">Nova Unidade</a>
                </div>

                <div class="panel-body">
                    @if (session('mensagem_sucesso'))
                        <div class="alert alert-success">
                            {{ session('mensagem_sucesso') }}
                        </div>
                    @endif

                    <table class="table">
                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <th>Complemento</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Ações</th>
                        
                        <tbody>

                        @foreach($unidades as $unidade)
                            <tr>
                                <td>{{ $unidade->nome }}</td>
                                <td>{{ $unidade->endereco }}</td>
                                <td>{{ $unidade->numero }}</td>
                                <td>{{ $unidade->complemento }}</td>
                                <td>{{ $unidade->bairro }}</td>
                                <td>{{ $unidade->cidade }}</td>
                                <td>
                                    <a href="unidades/{{ $unidade->id }}/editar" class="btn btn-default">Editar</a>
                                    {!! Form::open(['method' => 'DELETE', 'url' => '/unidades/'.$unidade->id,
                                    'style' => 'display: inline;']) !!}
                                    <button type="submit" class="btn btn-default" >Excluir</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
