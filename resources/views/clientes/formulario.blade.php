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
                    {!! Form::input('text','nome',null, ['class' => 'form-control','autofocus','required="Preencha um nome"']) !!}

                    {!! Form::label('endereco','Endereço') !!}
                    {!! Form::input('text','endereco',null, ['class' => 'form-control','required']) !!}

                    {!! Form::label('numero','Número') !!}
                    {!! Form::number('numero',null, ['class' => 'form-control','required']) !!}

                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',null, ['class' => 'form-control','required']) !!}

                    <br>
                    {!! Form::select('unidade_id', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Selecione a unidade do cliente', 'class' => 'form-control']) !!}

                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
