<?php require_once 'cabecalho.php'?>

<?php

	$produtos = listaProdutos($conexao);

?>
<h1>Produtos</h1>

<table class="table table-striped table-bordered">


	<thead>
		<tr>
			<th> Nome </th>
			<th> Preço</th>
			<th>Remove</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($produtos as $prod) : ?>
		<tr>
			<td> <?=$prod['nome'] ?> </td>
			<td> <?=$prod['preco'] ?> </td>
			<td>
				<a href="remove-produto.php?id=<?=$prod['id']?>" class="btn btn-danger">Remover</a>
				</a>
			</td>
		</tr>

	</tbody>

<?php endforeach ?>
</tbody>
</table>

<?php if(isset($_GET["removido"])){

}

include 'rodape.php' ?>