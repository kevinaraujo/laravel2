<h1>Listar de Contas</h1>
<table>
	<tr>
		<td>ID</td>
		<td>Descrição</td>
		<td>Valor</td>
	</tr>
<?php
	foreach($contas_pagar as $campo){
		echo "<tr>
				<td>{$campo->id}</td>
				<td>{$campo->descricao}</td>
				<td>{$campo->valor}</td>
			</tr>";	
	}
?>
</table>