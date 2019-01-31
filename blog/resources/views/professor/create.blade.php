@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                Cadastrar Professor
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ route('professor.store') }}">
                    @csrf
                    <div class="form-group row formteste">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                        <div class="col-md-6">
                            <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" required autofocus>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="graduacao" class="col-md-1 col-form-label ">{{ __('Graduacao:') }}</label>

                        <div class="col-md-6">
                            <input id=graduacao type="text" class="form-control{{ $errors->has('graduacao') ? ' is-invalid' : '' }}" name="graduacao" value="{{ old('graduacao') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="especialidade" class="col-md-1 col-form-label text-md-right">{{ __('Especialidade:') }}</label>

                        <div class="col-md-6">
                            <input id=especialidade type="text" class="form-control{{ $errors->has('especialidade') ? ' is-invalid' : '' }}" name="especialidade" value="{{ old('especialidade') }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="turma_id" class="col-md-4 col-form-label text-md-right">{{ __('Turma:') }}</label>

                        <div class="col-md-6">
                            <select class="form-control" name="turma_id">
                                <option>Escolha a Turma</option>
                                @foreach($turma as $turmas)

                                    <option value="{{$turmas->id}}">{{$turmas->nome}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Enviar') }}
                            </button>

                            <a href="{{ route('professor.index') }}" class="btn btn-danger">Voltar</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
    @endsection