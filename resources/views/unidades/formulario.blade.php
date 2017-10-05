@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Informe abaixo as informações da Unidade.
                        <a class="pull-right" href="{{ url('unidades') }}">Lista de Unidades</a>
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
                            {!! Form::open(['url' => 'unidades/salvar']) !!}
                        @endif



                        {!! Form::label('nome','Nome da Unidade') !!}
                        {!! Form::input('text','nome',null, ['class' => 'form-control','autofocus']) !!}

                        {!! Form::label('endereco','Endereço') !!}
                        {!! Form::input('text','endereco',null, ['class' => 'form-control','']) !!}

                        {!! Form::label('numero','Número') !!}
                        {!! Form::input('text','numero',null, ['class' => 'form-control','']) !!}

                        {!! Form::label('complemento','Complemento') !!}
                        {!! Form::input('text','complemento',null, ['class' => 'form-control','']) !!}

                        {!! Form::label('bairro','Bairro') !!}
                        {!! Form::input('text','bairro',null, ['class' => 'form-control','']) !!}

                        {!! Form::label('cidade','Cidade') !!}
                        {!! Form::input('text','cidade',null, ['class' => 'form-control','']) !!}
                        <br>
                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
