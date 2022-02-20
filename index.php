<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/popup.css">
	<link rel="stylesheet" href="css/store.css">

	<title>TextilExport - Home</title>
</head>

<body>

	<div class="container-fluid" style="background-color:#af3120;">
		<div class="row">
			<div class="col-sm-12 text-center">
				<img src="img/Logo.png" alt="TextilExport" style="max-width:100%;margin:0 auto 0 auto;">
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-xs-12 text-center">
				<br>
				Filtros:
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="GET" style="display:inline">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<label for="categoria">Categoría</label>
					<select name="categoria" id="categoria">
						<option value="todos" selected>Todos</option>
						<option value="textil">Textil</option>
						<option value="promocional">Promocional</option>
					</select>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<label for="stockQ">Stock</label>
					<select name="stockQ" id="stockQ">
						<option value="todos" selected>Mostrar todos</option>
						<option value="disponibles">Sólo productos disponibles</option>
					</select>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" value="Aplicar" class="btn btn-primary">
				</form>
			</div>
		</div>

		<?php
		require 'mostrar.php';
		//Mostrar todos

		if (isset($_GET['categoria']) && isset($_GET['stockQ'])) {
			if ($_GET['categoria'] == 'textil' && $_GET['stockQ'] == 'disponibles') {
				textilDisponibles();
			} else if ($_GET['categoria'] == 'promocional' && $_GET['stockQ'] == 'disponibles') {
				promocionalDisponibles();
			} else if ($_GET['categoria'] == 'textil' && $_GET['stockQ'] == 'todos') {
				textilTodos();
			} else if ($_GET['categoria'] == 'promocional' && $_GET['stockQ'] == 'todos') {
				promocionalTodos();
			} else if ($_GET['categoria'] == 'todos' && $_GET['stockQ'] == 'disponibles') {
				todosDisponibles();
			} else {
				mostrarTodos();
			}
		} else {
			mostrarTodos();
		}
		?>

		<a href="login.php" class="float">
			<i class="fa fa-user my-float"></i>
		</a>

	</div>

	<footer style="background-color: rgba(0, 0, 0, 0.05); padding: 1.5em 0px; font-size:1.1em;" class="text-center">
		<b>TextilExport</b> - Universidad Don Bosco - Lenguajes Interpretados en el Cliente 03L - Desafío 1
	</footer>

</body>

</html>