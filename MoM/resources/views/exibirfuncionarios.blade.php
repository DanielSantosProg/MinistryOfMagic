@extends('layout')

@section('content')
    <div id="imglogo">
            <img src="/imgs/logo_g.png" class="img2">
    </div>    
    <div class='rectangle'>
            <h1 id='Exibirfun'>Exibir funcionarios</h1>
            <h2 id='numdepartamento1' name="id_departamento">Numero do departamento</h2> 
            <div>
                <input type = "text" id= 'box_numdepartamento1' placeholder= "Digite o numero do departamento">
            </div>        
            <a class="btn btn-outline-primary" href="{{route('funcionarios.index')}}" id='exibir_but'>Exibir</a>
    </div>
@endsection