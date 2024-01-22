<?php if(!class_exists('Rain\Tpl')){exit;}?>
<main class="container">
	<h1>Lista de Tarefas</h1>

	<div class="box-header">
		<a href="/admin/users/create" class="btn btn-success">Cadastrar uma nova tarefa</a>
    </div>

	<table class="table table-hover">
		<thead>
			<tr>
				<th scope="col">Número</th>
				<th scope="col">Título</th>
				<th scope="col">Descrição</th>
				<th scope="col">Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $counter1=-1;  if( isset($dados) && ( is_array($dados) || $dados instanceof Traversable ) && sizeof($dados) ) foreach( $dados as $key1 => $value1 ){ $counter1++; ?>
				<tr>
					<th scope="row"><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
					<td><?php echo htmlspecialchars( $value1["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
					<td><?php echo htmlspecialchars( $value1["status"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>	
					<td>
						<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-edit fa-lg"></i>Editar</a>
						<a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash fa-lg"></i>Excluir</a>
					</td>				
				</tr>				
			<?php } ?>
		</tbody>
	</table>
</main>

