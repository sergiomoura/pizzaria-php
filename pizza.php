<?php
/**
 * 
 * Fazer com que o script pizza.php capture o id de uma pizza pelo
 * $_GET e exiba as informações da pizza desse id. 
 * 
 */
	// Incluir os scripts auxiliares
	include("includes/pizzas.php");
	include("includes/functions.php");

	// Capturar o id pedido
	$id = $_GET['id'];

	// Carregar a pizza que tem esse id
	$pizza = pizzaPorId($id);

	// echo "<pre>";
	// print_r($pizza);
	// echo "</pre>";
	// die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizzaria Fantástica</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<link rel="stylesheet" href="css/pizza.css">
	<main>
		<h1><?= $pizza['nome'] ?></h1>
		<h2>R$ <?= $pizza['preco'] ?></h2>
		<img src="<?= $pizza['img'] ?>" alt="<?= $pizza['nome'] ?>">
		<div>Ingredientes: <?= implode(", ", $pizza["ingredientes"])  ?></div>
		<button>+ Add</button>
		<a href="#" class="prev">&lt;</a>
		<a href="#" class="next">&gt;</a>
	</main>
</body>
</html>