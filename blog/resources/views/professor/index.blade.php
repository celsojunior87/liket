@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="title-pg">Listagem dos Professores</h1>
                    <a href="{{url('/professor/create')}}" class="btn btn-primary btn-add">
                        <span class="glyphicon glyphicon-plus"></span> Cadastrar Professores</a>
                    <table class="table table-striped">

                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Nome do Professor</th>
                            <th>Graduação</th>
                            <th>Especialidade</th>
                            <th width="100px">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($professor as $professores)
                            <tr>
                                <th>{{ $professores->id }}</th>
                                <td>{{ $professores->nome}}</td>
                                <td>{{ $professores->graduacao}}</td>
                                <td>{{ $professores->especialidade}}</td>
                                <td>
                                    <a href="{{route('professor.edit', $professores->id )}}" class=" action edit">
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
