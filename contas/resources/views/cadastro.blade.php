<h1>Cadastro de Contas</h1>
<form action="{{ action('ContasPagarController@salvar') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
	<div class="form-group">
		<label>Descrição</label>
		<input type="text" name="descricao" class="form-control"/>
	</div>
	<div class="form-group">
		<label>Valor</label>
		<input type="text" name="valor" class="form-control"/>
	</div>
	
	<button type="submit" class="btn btn-info">Gravar</button>
	
</form>