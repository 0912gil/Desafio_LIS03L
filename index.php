<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap-store.css">
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
		<form action="" method="GET" style="display:inline">
		&nbsp;&nbsp;&nbsp;&nbsp;
			<label for="categoria">Categoría</label>
			<select name="categoria" id="categoria">
				<option value="textil" selected>Textil</option>
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
$contador=0;
$productos=simplexml_load_file('productos.xml');
foreach ($productos ->producto as $row) {
?>

<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="img/<?=$row->img?>" class="img-responsive"> 

						<!--Etiquetas a las imágenes -->
						<?php 
						if($contador%3==0){
							echo '<span class="tag2 hot">
							HOT
						</span>					
						<span class="tag2 hot">
							HOT
						</span>';
						}
						else if($contador%3==1){
							echo '<span class="tag3 special">
							HOT
						</span>					
						<span class="tag3 special">
							ESPECIAL
						</span>';
						}
						$contador++;
						?>

					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
                                <?=$row->nombre?>
							</a>
							<a href="#">
								<span><?=$row->codigo?></span>
							</a>                            

						</h5>
						<p class="price-container">
							<b><span>$<?=$row->precio?></span></b>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p><?=substr($row->descripcion,0,35)?>...</p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger">Añadir al Carrito</a><br><br>
                            <a href="javascript:void(0);" class="btn btn-info">Más información</a>
						</div>
						<div class="col-md-12">
							<br>
							<div class="rating">
							<?php
							if ($row->existencias>0){
								echo '<b>Stock: </b>'.$row->existencias;
							}
							else{
								echo 'Producto no disponible';
							}
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
<?php
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