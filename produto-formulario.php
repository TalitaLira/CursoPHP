<?php require_once 'cabecalho.php' ?>
<?php require_once 'banco-categoria.php' ?>

<?php $categorias = listaCategorias($conexao); ?>

<h1>Formulário de cadastro</h1>

<form action="adiciona-produto.php" method="post"> <!-- Dando ação do arquivo add prod ao formulario -->
	<div class="form-group">
		<label>
			Nome: 
			<input type="text" name="nome" class="form-control"><br><br> 
		</label>
	</div>

	<div class="form-group">
		<label>
			Preço:
			<input type="number" name="preco" class="form-control"><br><br>
		</label>
	</div>
	
	<div class="form-group">
		<label>Descrição:</label>
		<textarea name="descricao" class="form-control"></textarea>
	</div>

	<div class="form-group"> <!-- selecionar categoria -->
		<label>Categoria:</label>
		<select name="categoria_id" class="form-control">
			<?php foreach ($categorias as $categoria) : ?>
				<option value="<?=$categoria['id']?>">
					<?= $categoria['nome']; ?>
				</option>
			<?php endforeach ?>
		</select>
	</div>

	<div class="checkbox"> <!-- selação do Usado -->
		<label>
			<input type="checkbox" name="usado" value="false">Usado</input>
		</label>
	</div>
	
	<input type="submit" value="Cadastrar" class="btn btn-primary">
	
	</form>

<?php require_once 'rodape.php'; ?>