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
		@foreach ($sala as $salalist)
		<td>{{ $salalist->id }}</td>
                <td>{{ $salalist->Numero }}</td>
                <td>{{ $salalist->Qtd_pessoas }}</td>
                <td>
                  <form action = "{{ route('sala.destroy', $salalist->id) }}" method = "POST">
                    @csrf
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

