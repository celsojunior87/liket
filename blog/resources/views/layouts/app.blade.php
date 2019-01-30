<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LIKET</title>


    <!-- Styles -->
    <link href="{{ url('css/app.css')}}" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Scripts -->
    <script src="{{url('js/app.js')}}"></script>

</head>
<body>
<div id="app">
    <nav class= "navbar navbar-inverse navbar-static-top navegacao">
        <div class="container">
            <div class="navbar-header">


                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                  LIKET
                </a>

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Entrar</a></li>
                        <li><a href="{{ url('/register') }}">Cadastrar</a></li>

                    @else
                        <li class="dropdown">

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                Alunos <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a style="color: black" href="{{ url('/alunos') }}">Listar Alunos</a>
                                </li>
                                <li>
                                    <a style="color: black"  href="{{ url('/alunos/create') }}">Cadastrar Alunos</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                Professores <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a style="color: black" href="{{ url('/professor') }}">Listar Professores</a>
                                </li>
                                <li>
                                    <a style="color: black"  href="{{ url('/professor/create') }}">Cadastrar Professores</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                Turmas <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a style="color: black" href="{{ url('/turma') }}">Listar Turmas</a>
                                </li>
                                <li>
                                    <a style="color: black"  href="{{ url('/turma/create') }}">Cadastrar Turmas</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>

</div>

