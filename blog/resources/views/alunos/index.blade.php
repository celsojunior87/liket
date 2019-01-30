@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                <h1 class="title-pg">Listagem dos Alunos</h1>
                <a href="{{url('/alunos/create')}}" class="btn btn-primary btn-add">
                    <span class="glyphicon glyphicon-plus"></span> Cadastrar Alunos</a>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome do Aluno</th>
                        <th>Idade</th>
                        <th>Serie</th>
                        <th width="100px">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($aluno as $alunos)
                        <tr>
                            <th>{{ $alunos->id }}</th>
                            <td>{{ $alunos->nome}}</td>
                            <td>{{ $alunos->idade}}</td>
                            <td>{{ $alunos->serie}}</td>


                            <td>
                                <a href="{{route('alunos.edit', $alunos->id )}}" class=" action edit">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                                <a href="" class=" action delete">
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
