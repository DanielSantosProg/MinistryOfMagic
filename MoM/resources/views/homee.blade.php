@extends('layout')

@section('content')
    <div id="imglogo">
            <img src="/imgs/logo_g_white.png" class="img2">
    </div>
    <div>
        <a class="btn btn-outline-primary" href="{{route('salas.create')}}" id="home_but_1">Cadastrar <br> sala</a>
        <a class="btn btn-outline-primary" href="{{route('funcionarios.create')}}" id="home_but_2">Cadastrar <br> funcionário</a>
        <a class="btn btn-outline-primary" href="{{route('departamentos.create')}}" id="home_but_3">Cadastrar <br> departamento</a>
        <a class="btn btn-outline-primary" href="{{route('funcionarios.index')}}" id="home_but_4">Exibir <br> funcionários</a>
    </div>
    
@endsection