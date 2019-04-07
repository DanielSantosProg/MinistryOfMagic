@extends('layout')

@section('content')
    <div id="imglogo">
            <img src="/imgs/logo_g_white.png" class="img2">
    </div>
    <div class='rectangle'>
        <form action = "{{route('departamentos.store')}}" method = "POST">
            @csrf
            <div class = "form-group">
                <h1 id='cadastrodepart'>Cadastro de departamento</h1>
                <h2 id='namee'>Nome</h2> 
                <div>
                    <input type = "text" id= 'dadoDepar_1' placeholder= "Digite o nome" class= "form-control" name="nome"/>
                </div>
                <h3 id='coordenador'>Coordenador</h3>
                <div>
                    <input type = "text" id='dadoDepar_2' placeholder = "Digite o coordenador" class= "form-control" name="coordenador" />
                </div>
                <h4 id='sala'>Sala</h4>
                <div>
                    <input type="text" id='dadoDepar_3' placeholder="Digite a sala" class= "form-control" name="id_sala"/>
                </div>
                <button type="submit" class="btn btn-outline-primary" id='cad_but'>Cadastrar</button>
            </div>
        </form>
    </div>
@endsection