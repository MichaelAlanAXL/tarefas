<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
    <h1 class="mt-4 mb-5">Editar Tarefa:</h1>

    <form action="/editar/<?php echo htmlspecialchars( $tarefa["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
         <div class="form-group">
            <label for="titulo"><strong>Número:</strong></label>
            <input type="text" class="form-control col-sm-2 mb-4" id="titulo" name="title" value="<?php echo htmlspecialchars( $tarefa["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required readonly>
        </div>

        <div class="form-group">
            <label for="titulo"><strong>Título:</strong>:</label>
            <input type="text" class="form-control col-sm-3 mb-4" id="titulo" name="title" value="<?php echo htmlspecialchars( $tarefa["title"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required autofocus>
        </div>

        <div class="form-group">
            <label for="descricao"><strong>Descrição:</strong>:</label>
            <input type="text" class="form-control col-sm-6 mb-4" id="descricao" name="description" value="<?php echo htmlspecialchars( $tarefa["description"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required></input>
        </div>

        <div class="form-group">
            <label for="status"><strong>Status:</strong>:</label>
            <input type="text" class="form-control col-sm-3 mb-4" id="status" name="status" value="<?php echo htmlspecialchars( $tarefa["status"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required >
        </div>

        <button type="submit" class="btn btn-primary"> Salvar</button>
    </form>
</div>