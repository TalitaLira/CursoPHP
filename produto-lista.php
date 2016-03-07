<?php require_once 'cabecalho.php' ?>

<?php $produtos = listaProdutos($conexao); ?>

<h1>Produtos</h1>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th> Nome </th>
			<th> Preço</th>
			<th> Descrição </th>
			<th> Categoria </th>
			<th> Usado </th>
			<th>Remove</th>
		</tr>
	</thead>

	<tbody>

<?php foreach ($produtos as $prod) : ?>
		<tr>
			<td> <?=$prod['nome'] ?> </td>
			<td> <?=$prod['preco'] ?> </td>
			<td> <?=$prod['descricao']?> </td>
			<td> <?=$prod['categoria']?> </td>
			<td> <?=$prod['usado']?> </td>
			<td>
				<form action="remove-produto.php" method="post"><!--Dando ação do arquivo remove-produto-->
					<input type="hidden" name="id" value="<?=$prod['id']?>">
					<button class="btn btn-danger">Remover</button>
				</form>
			</td>
		</tr>

	</tbody>

<?php endforeach ?>

</tbody>
</table>

<?php 

if(isset($_POST["removido"])){

}

include 'rodape.php' ?>