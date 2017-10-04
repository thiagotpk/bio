@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Informe abaixo as informações do Cliente.
                	<a class="pull-right" href="{{ url('clientes') }}">Listagem de Clientes</a>
                </div>

                <div class="panel-body">
                    @if (session('mensagem_sucesso'))
                        <div class="alert alert-success">
                            {{ session('mensagem_sucesso') }}
                        </div>
                    @endif

                    @if(Request::is('*/editar'))
                        {!! Form::model($cliente, ['method'=>'PATCH', 'url' => 'clientes/'.$cliente->id]) !!}
                    @else
                        {!! Form::open(['url' => 'clientes/salvar']) !!}
                    @endif

                    

                    {!! Form::label('nome','Nome') !!}
                    {!! Form::input('text','nome',null, ['class' => 'form-control','autofocus']) !!}

                    {!! Form::label('endereco','Endereço') !!}
                    {!! Form::input('text','endereco',null, ['class' => 'form-control','']) !!}

                    {!! Form::label('numero','Número') !!}
                    {!! Form::input('text','numero',null, ['class' => 'form-control','']) !!}

                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
