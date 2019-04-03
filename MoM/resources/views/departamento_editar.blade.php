@extends('layout')

@section('content')
<div class='rectangle'>
    <form action = "{{ route('departamentos.update', $departamento) }}" method = "POST">
            @csrf
            @method('PUT')
            <div class = "form-group">
                <h1 id='cadastro_lab'>Edição de departamento</h1> 
                <h2 id='nome_depar'>Nome</h2>
                <div>
                    <input type = "text" class = "form-control" id="dadosDepar_1" name="nome" placeholder = "Digite o nome aqui">
                </div>
                <h2 id='sala_depar'>Sala</h2>
                <div>
                    <input type = "text" class = "form-control" id="dadosDepar_2" name="sala" placeholder = "Digite o nome da sala aqui">
                </div>
                <h2 id='coordenador_depar'>Coordenador</h2>
                <div>
                    <input type = "text" class = "form-control" id="dadosDepar_3" name="coordenador" placeholder = "Digite o nome do coordenador aqui">
                </div>


                <button type="submit" class="btn btn-outline-primary" id="depar_but">Editar</button>
            </div>
    </form>
</div>
@endsection