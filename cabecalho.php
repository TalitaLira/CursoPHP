<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Minha loja</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/loja.css">
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand">Minha Loja</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li><a href="produto-formulario.php">Adiciona Produto</a></li>
						<li><a href="produto-lista.php">Produtos</a></li>
						<li><a href="sobre.php">Sobre</a></li>	
					</ul>
				</div>
			</div>
		</div>
		<main class="container">
			<article class="principal">

<?php require_once 'conexao.php' ?>
<?php require_once 'banco-produto.php' ?>
