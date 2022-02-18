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
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;" >
                        <div class="card-body col-sm-8">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Lista de Productos</h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
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
    </section>
</body>
</html>