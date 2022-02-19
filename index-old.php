<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <?php
    require 'procesarvalidaciones.php';
  ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-10 px-2 py-2 my-2 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Lista de Productos</h3>
                    </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
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
                                                </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            <script src="js/jquery.min.js"></script>
                            <script src="js/bootstrap.min.js"></script>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>