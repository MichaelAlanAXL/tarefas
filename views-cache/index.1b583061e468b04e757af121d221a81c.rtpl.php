<?php if(!class_exists('Rain\Tpl')){exit;}?>
<main>
	<h1>Lista de Tarefas</h1>

	<table>
		<thead>
			<tr>
				<th>Número</th>
				<th>Título</th>
				<th>Descrição</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $counter1=-1;  if( isset($dados) && ( is_array($dados) || $dados instanceof Traversable ) && sizeof($dados) ) foreach( $dados as $key1 => $value1 ){ $counter1++; ?>
				<tr>
					<th><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
					<td><?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["status"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>					
				</tr>				
			<?php } ?>
		</tbody>
	</table>
</main>

