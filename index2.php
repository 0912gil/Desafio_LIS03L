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
            <img src="img/Logo.png" alt="TextilExport">
        </div>
    </div>
</div>

<div class="container">


<?php
$productos=simplexml_load_file('productos.xml');
foreach ($productos ->producto as $row) {
?>

<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/products/p4.png" class="img-responsive"> 
						<span class="tag2 hot">
							HOT
						</span> 
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
							<span>$<?=$row->precio?></span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>A Short product description here </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
							<a href="javascript:void(0);" class="btn btn-danger">Añadir al Carrito</a><br><br>
                            <a href="javascript:void(0);" class="btn btn-info">Más información</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Calificación:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
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
</body>
</html>
