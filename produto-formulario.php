<?php require_once 'cabecalho.php' ?>

<h1>Formulário de cadastro</h1>

<form action="adiciona-produto.php" method="GET"> <!-- Dando ação do adiciona-produto ao formulário -->
	
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
	<input type="submit" value="Cadastrar" class="btn btn-primary">
</form>

<?php require_once 'rodape.php'; ?>