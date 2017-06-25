@extends('principal.app')
@section('title','Listagem de Contas')

@section('content')
<script>
function apagar(url){
	if(confirm('Deseja Apagar?')){
		window.location=url;
	}
}
</script>
<h1>Listar de Contas</h1>
@if(old('insert'))
	<div class="alert alert-success">
		<strong>Cadastro realizado com sucesso!</strong>	
	</div>
@elseif(old('update'))
	<div class="alert alert-success">
		<strong>Update realizado com sucesso!</strong>	
	</div>
@endif

<table width="100%" class="table table-stripped table-hover table-border">
	<tr>
		<td>ID</td>
		<td>Descrição</td>
		<td>Valor</td>
		<td>Editar</td>
		<td>Apagar</td>
	</tr>

	@foreach($contas_pagar as $campo)

			<tr>
				<td>{{ $campo->id }}</td>
				<td>{{ $campo->descricao }}</td>
				<td>{{ $campo->valor }}</td>
				<td><a class='btn btn-small btn-info' href="{{ action('ContasPagarController@editar',$campo->id) }}">Editar</a></td>
				<td><a class='btn btn-small btn-danger' href="#" onclick="apagar('{{ action('ContasPagarController@apagar',$campo->id) }}')">Apagar</a></td>
			</tr>
	@endforeach
</table>
<a class='btn btn-small btn-success' href="{{ action('ContasPagarController@cadastro') }}">Cadastrar</a>
@endsection