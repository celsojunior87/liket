@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cadastrar Alunos
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('turma.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome:') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{ old('nome') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="turno" class="col-md-4 col-form-label text-md-right">{{ __('Turno:') }}</label>

                            <div class="col-md-6">
                                <input id=turno type="text" class="form-control{{ $errors->has('turno') ? ' is-invalid' : '' }}" name="turno" value="{{ old('turno') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="disciplina" class="col-md-4 col-form-label text-md-right">{{ __('Disciplina:') }}</label>

                            <div class="col-md-6">
                                <input id=disciplina type="text" class="form-control{{ $errors->has('disciplina') ? ' is-invalid' : '' }}" name="disciplina" value="{{ old('disciplina') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="aluno_id" class="col-md-4 col-form-label text-md-right">{{ __('Aluno:') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="aluno_id">
                                    <option>Escolha o Aluno</option>
                                    @foreach($alunos as $aluno)

                                        <option value="{{$aluno->id}}">{{$aluno->nome}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Enviar') }}
                                </button>

                                <a href="{{ route('alunos.index') }}" class="btn btn-danger">Voltar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


