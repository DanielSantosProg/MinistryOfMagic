@extends('layout')

@section('content')
<div id="imglogo">
            <img src="/imgs/logo_g_white.png" class="img2">
    </div>
    <div class='rectangle'>
        <h1 id='alocarfun'>Alocar funcionario</h1>
        <h2 id='numdepartamento'>Numero do departamento</h2> 
        <div>
           <input type = "text" id= 'dadoAlocar1' placeholder= "Digite o numero do departamento" />
        </div>
        <h3 id='Rub'>RUB do funcionario</h3>
        <div>
            <input type = "text" id='dadoAlocar2' placeholder = "Digite o RUB" />
        </div>
        
        <button type="button" class="btn btn-outline-primary" id='cad_but'>Cadastrar</button>
    </div>
@endsection





