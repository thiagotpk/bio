@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Clientes
                	<a class="pull-right" href="{{ url('clientes/novo') }}">Novo Cliente</a>
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
                        <th>Ações</th>
                        <tbody>
                            @foreach($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td>{{ $cliente->numero }}</td>
                                <td>
                                <a href="clientes/{{ $cliente->id }}/editar" class="btn btn-default">Editar</a>
                                {!! Form::open(['method' => 'DELETE', 'url' => '/clientes/'.$cliente->id, 'style' => 'display: inline;']) !!}
                                <button type="submit" class="btn btn-default">Excluir</button>
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
</div>
@endsection
