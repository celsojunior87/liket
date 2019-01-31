@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Visualizar Alunos
                </div>
                <div class="panel-body">
                    <p><b>Nome:</b>{{$alunos->nome}}</p>
                    <p><b>Idade:</b>{{$alunos->idade}}</p>
                    <p><b>E-mail:</b>{{$alunos->email}}</p>
                    <p><b>Serie:</b>{{$alunos->serie}}</p>

                    {{--Delete button--}}
                    <form action="{{route('alunos.destroy', [$alunos->id])}}" method="POST">
                        {{method_field('DELETE')}}
                        @csrf
                        <input type="submit" class="btn btn-danger" value="Excluir"/>
                        <a href="{{ route('alunos.index') }}" class="btn btn-primary">Voltar </a>
                    </form>

                    {{--{{form::open(['route'=>['alunos.destroy',$alunos->id],'method'=>'DELETE']) }}--}}

                    {{--{{form::submit("Deletar Aluno: $alunos->nome",['class'=>'btn btn-danger'])}}--}}

                    {{--{{form::close()}}--}}



                </div>
            </div>
        </div>
    </div>
@endsection

