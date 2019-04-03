@extends('layout')

@section('content')
    <div id="imglogo">
            <img src="/imgs/logo_g_white.png" class="img2">
    </div>
    <div class='rectangle'>
        <h1 id='Cadastrosl'>Cadastro de sala</h1>
        <h2 id='numsala'>Numero da sala</h2> 
        <div>
           <input type = "text" id= 'dadonumsala1' placeholder= "Digite o numero da sala" />
        </div>
        <h2 id='nummaxfun'>Numero máximo de funcionarios</h3>
        <div>
            <input type = "text" id='dadonumsala2' placeholder = "Digite o numero máximo de funcionarios" />
        </div>
        
        <button type="button" class="btn btn-outline-primary" id='cad_but'>Cadastrar</button>
    </div>
@endsection