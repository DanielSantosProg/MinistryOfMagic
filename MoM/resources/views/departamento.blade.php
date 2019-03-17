@extends('layout')

@section('content')
    <div id="imglogo">
            <img src="/imgs/logo_g.png" class="img2">
    </div>
    <div class='rectangle'>
        <h1 id='cadastrodepart'>Cadastro de departamento</h1>
        <h2 id='namee'>Nome</h2> 
        <div>
           <input type = "text" id= 'dadoDepar_1' placeholder= "Digite o nome" />
        </div>
        <h3 id='coordenador'>Coordenador</h3>
        <div>
            <input type = "text" id='dadoDepar_2' placeholder = "Digite o coordenador" />
        </div>
        <h4 id='sala'>Sala</h4>
        <div>
        	<input type="text" id='dadoDepar_3' placeholder="Digite a sala"/>
        </div>
        <button type="button" class="btn btn-outline-primary" id='cad_but'>Cadastrar</button>
    </div>
@endsection