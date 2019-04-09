@extends('layout')

@section('content')
    <form action = "{{ route('salas.update', $sala) }}" method = "POST">
            @csrf
            @method('PUT')
            <div class = "form-group">
                <h1 id='edicao_sala'>Edição de sala</h1> 
                <h2 id='numsala1'>Número</h2>
                <div>
                    <input type = "text" class = "form-control" id="dadonumsala1" name="numero" placeholder = "Digite o número da sala aqui">
                </div>
                <h2 id='nummaxfun'>Quantidade de pessoas</h2>
                <div>
                    <input type = "text" class = "form-control" id="dadonumsala2" name="qtd_pessoas" placeholder = "Digite a quantidade máxima de pessoas aqui">

                </div>
                <button type="submit" class="btn btn-outline-primary" id="salaEdit_but">Editar</button>
            </div>
    </form>
@endsection