@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="title-pg">Listagem de Turmas</h1>
                    <a href="{{url('/turma/create')}}" class="btn btn-primary btn-add">
                        <span class="glyphicon glyphicon-plus"></span> Cadastrar Turmas</a>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Turmas</th>
                            <th>Disciplina</th>
                            <th>Turno</th>

                            <th width="100px">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($turma as $turmas)
                            <tr>
                                <th>{{ $turmas->id }}</th>
                                <td>{{ $turmas->nome}}</td>
                                <td>{{ $turmas->disciplina}}</td>
                                <td>{{ $turmas->turno}}</td>

                                <td>
                                    <a href="{{route('turma.edit', $turmas->id )}}" class=" action edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </a>
                                    <a href="{{route('turma.destroy', $turmas->id )}}" class=" action delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>

                                </td>
                        @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    </div>
@endsection