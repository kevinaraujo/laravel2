<h1>Listar de Contas</h1>
<table>
	<tr>
		<td>ID</td>
		<td>Descrição</td>
		<td>Valor</td>
		<td>Ação</td>
	</tr>
<?php
	foreach($contas_pagar as $campo){
	?>
			<tr>
				<td><?php echo $campo->id; ?></td>
				<td><?php echo$campo->descricao; ?></td>
				<td><?php echo$campo->valor; ?></td>
				<td><a class='btn btn-small btn-info' href="{{ action('ContasPagarController@editar',$campo->id) }}">Editar</a></td>
				<td><a class='btn btn-small btn-danger' href="{{ action('ContasPagarController@apagar',$campo->id) }}">Apagar</a></td>
			</tr>
	<?php
	}
?>
</table>