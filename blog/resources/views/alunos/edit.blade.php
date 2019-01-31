@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Editar Alunos
                </div>
                <div class="panel-body">

                    @if(isset ($alunos))
                        <form class="form" method="post" action="{{route('alunos.update',$alunos->id)}}">
                            {{method_field('PUT')}}
                            @else
                        <form class="form" method="post" action="{{route('alunos.store')}}">

                        @endif


                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{$alunos->nome or old('nome') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('Idade:') }}</label>

                            <div class="col-md-6">
                                <input id=idade type="text" class="form-control{{ $errors->has('idade') ? ' is-invalid' : '' }}" name="idade" value="{{$alunos->idade or old('idade') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email:') }}</label>

                            <div class="col-md-6">
                                <input id=email type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$alunos->email or old('email') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Serie:') }}</label>

                            <div class="col-md-6">
                                <input id=serie type="text" class="form-control{{ $errors->has('serie') ? ' is-invalid' : '' }}" name="serie" value="{{$alunos->serie or old('serie') }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Editar Alunos') }}
                                </button>
                                <a href="{{ route('alunos.index') }}" class="btn btn-danger">Voltar </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

