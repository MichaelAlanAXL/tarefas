<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
	<h1 class="mt-4 mb-5">Cadastrar Nova Tarefa</h1>

	<form action="/cadastrar" method="post">
	    <div class="form-group">
	        <label for="titulo">Título:</label>
	        <input type="text" class="form-control col-sm-6 mb-4" id="titulo" name="title" required autofocus>
	    </div>

	    <div class="form-group">
	        <label for="descricao">Descrição:</label>
	        <textarea class="form-control col-sm-6" id="descricao" name="description" rows="4" required></textarea>
	    </div>

	    <div class="form-group">
	        <label for="status">Status:</label>
	        <input type="text" class="form-control col-sm-6" id="status" name="status" required >
	    </div>

	    <button type="submit" class="btn btn-primary">Concluir Cadastro</button>
	</form>

</div>
<!-- Adicionando o Bootstrap JS e Popper.js via CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
