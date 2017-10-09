@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Editando seu perfil
                    </div>
                    @include('flash::message')

                    <div class="panel-body">
                        @if (session('mensagem_sucesso'))
                            <div class="alert alert-success">
                                {{ session('mensagem_sucesso') }}
                            </div>
                        @endif

                        {!! Form::model($perfil, ['method'=>'PATCH', 'url' => 'perfil/'.$perfil->id]) !!}

                        {!! Form::label('name','Nome Usuário') !!}
                        {!! Form::input('text','name',null, ['class' => 'form-control','autofocus']) !!}

                        {!! Form::label('email','Email') !!}
                        {!! Form::input('text','email',null, ['class' => 'form-control','']) !!}

                        <br>
                        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
