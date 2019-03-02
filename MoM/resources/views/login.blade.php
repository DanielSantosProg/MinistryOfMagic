@extends('layout')

@section('content')

<div id="imglogo">
        <img src="/imgs/logo_g.png" class="img2">
</div>
<div class='rectangle'>
    <h1 id='login'>Login</h1> 
    <h2 id='nome'>Nome</h2>
    <div>
        <input type = "text" id= 'dados1' value = "Digite o nome aqui" />
    </div>
    <h3 id='senha'>Senha</h3>
    <div>
        <input type = "text" id='dados2' value = "Digite a senha aqui" />
    </div>
    <button type="button" class="btn btn-outline-primary" id="login_but2">Entrar</button>    

    
</div>

@endsection