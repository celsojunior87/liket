@extends('layouts.app')

@section('content')

    <h1 class="title-pg">Cadastrar Turmas</h1>


            <form class="form" method="post" action="{{route('turma.update',$turma->id)}}">
               <form class="form" method="post" action="{{route('turma.store')}}">
        @csrf
        <div class="form-group">
            <input type="text"  class="form-control{{ $errors->has('nome') ? ' is-invalid' : '' }}" name="nome" value="{{$turma->nome or old('nome') }}" required autofocus>
        </div>

        <div class="form-group">
            <input type="text" name="turno" placeholder="turno" class="form-control" value="{{$turma->turno or old('turno')}}">
        </div>
        <div class="form-group">
            <input type="text" name="disciplina" placeholder="disciplina" class="form-control" value="{{$turma->disciplina or old('disciplina')}}">
        </div>
        <div class="form-group">
            <select class="form-control" name="alunos_id">
                <option>Escolha o Aluno</option>
                @foreach($alunos as $aluno)

                    <option value="{{$aluno->id}}">{{$aluno->nome}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <button class="btn btn-primary"> Enviar</button>
            <a href="{{ route('turma.index') }}" class="btn btn-danger">Voltar</a>
        </div>

    </form>

@endsection