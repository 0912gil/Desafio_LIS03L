<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ingreso de Productos Existentes</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<style>
    td{
        vertical-align: middle;
        text-align: center;
    }
</style>
</head>
<body>

<?php

    if($_POST['user']!=""&&$_POST['user']=="admin" &&$_POST['pass']!="" && $_POST['pass']=="textil123"){
        
    }
    else{
        header('Location: login.php?failed=1');
    }
?>

<div class="container">
    <h1 class="page-header text-center">Ingresar Productos Existentes</h1>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar Producto</a>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Existencia</th>
                </thead>
                <tbody>
                    <?php
                    $productos=simplexml_load_file('productos.xml');
                    foreach ($productos ->producto as $row) {
                                        
                            ?>
                            <tr>
                                <td><?=$row->codigo?></td>
                                <td><?=$row->nombre?></td>
                                <td><?=$row->descripcion?></td>
                                <td><?=$row->imagen?></td>
                                <td><?=$row->categoria?></td>
                                <td><?=$row->precio?></td>
                                <td><?=$row->existencia?></td>
                                <td>
                                    <br>
                                    <a href="#" class="btn btn-success">Editar</a><br><br>
                                    <a href="#delete_<?=$row->codigo?>" data-toggle="modal" class="btn btn-danger">Eliminar</a><br><br>
                                </td>
                            </tr>
                            <?php include('borrar_producto.php');?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('nuevo_producto.php');?>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
if(isset($_GET['exito'])){

?>
<script>
    alertify.success('Producto insertado exitosamente');
</script>
<?php
}
?>

</body>
</html>