@extends('layout')

@section('content')
    <div id="imglogo">
            <img src="/imgs/logo_g.png" class="img2">
    </div>
    <div class='rectangle'>
        <h1 id='cadastro_lab'>Cadastro de funcionário</h1> 
        <h2 id='nome_cad'>Nome</h2>
        <div>
           <input type = "text" id= 'dados_cad_1' placeholder = "Digite o nome aqui" />
        </div>
        <h3 id='senha_cad'>Senha</h3>
        <div>
            <input type = "text" id='dados_cad_2' placeholder = "Digite a senha aqui" />
        </div>
        <h4 id='end_cad'>Endereço</h4>
        <div>
            <input type = "text" id='dados_cad_3' placeholder = "Digite seu endereço aqui" />
        </div>
        <h5 id='rub_cad'>RUB</h5>        
        <div>
            <input type = "text" id='dados_cad_4' placeholder = "Digite o número do seu RUB aqui" />
        </div>
        <h6 id ='sex_cad'>Sexo</h6>
        <form action="" class="rad_but">
            <input type="radio" name="gender" value="male"> Masculino<br>
            <input type="radio" name="gender" value="female"> Feminino<br>
        </form>
        <h7 id='foto_cad'>Foto</h7>
        <button type="button" class="btn btn-outline-primary" id="cad_but">Cadastrar</button>
        <input type="image" src="/imgs/attach.png" alt="Submit" id='inserir_img'>
    </div>
@endsection
