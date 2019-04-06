@extends('layout')

@section('content')
<table class="table table-hover">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Numero</th>
			<th scope="col">Qtd_pessoas</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($salas as $salalist)
		            <td>{{ $salalist->id }}</td>
                <td>{{ $salalist->numero }}</td>
                <td>{{ $salalist->qtd_pessoas }}</td>
                <td>
                  <form action = "{{ route('salas.destroy', $salalist->id) }}" method = "POST">
                    @csrf
                    <a href ="{{ route('salas.edit', $salalist->id) }}" class="btn btn-success">Editar</a>
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

