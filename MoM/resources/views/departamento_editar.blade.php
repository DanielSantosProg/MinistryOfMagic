@extends('layout')

@section('content')
<div class='rectangle'>
    <form action = "{{ route('departamentos.update', $departamento) }}" method = "POST">
            @csrf
            @method('PUT')
            <div class = "form-group">
                <h1 id='editar_depar'>Edição de departamento</h1> 
                <h2 id='namee'>Nome</h2>
                <div>
                    <input type = "text" class = "form-control" id="EditdadosDepar_1" name="nome" placeholder = "Digite o nome aqui">
                </div>
                <h2 id='sala'>Sala</h2>
                <div>
                    <input type = "text" class = "form-control" id="EditdadosDepar_2" name="sala" placeholder = "Digite o nome da sala aqui">
                </div>
                <h2 id='coordenador'>Coordenador</h2>
                <div>
                    <input type = "text" class = "form-control" id="EditdadosDepar_3" name="coordenador" placeholder = "Digite o nome do coordenador aqui">
                </div>


                <button type="submit" class="btn btn-outline-primary" id="depar_but">Editar</button>
            </div>
    </form>
</div>
@endsection