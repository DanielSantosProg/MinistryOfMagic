@extends('layout')

@section('content')
<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Coordenador</th>
            <th scope="col">Sala</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $depar)
            <tr>
                <td>{{ $depar->id }}</td>
                <td>{{ $depar->nome }}</td>
                <td>{{ $depar->coordenador }}</td>
                <td>{{ $depar->id_sala }}</td>
                <td>
                  <form action = "{{ route('departamentos.destroy', $depar->id) }}" method = "POST">
                    @csrf
                    <a href ="{{ route('departamentos.edit', $depar->id) }}" class="btn btn-success">Editar</a>       
                    @method('DELETE')
                    <button type = "submit" class="btn btn-danger">Excluir</button>
                  </form>
                </td>
                </td>                   
            </tr>          
            @endforeach     
        </tbody>
      </table>
    @endsection