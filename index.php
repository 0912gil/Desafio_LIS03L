<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row py-3">
            <div class="col-md-8 offset-md-2">
            <h1>Registro de Productos</h1>
                <form action="procesardatos.php" method="POST" role="form">
                    <div class="row py-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php
                                    if(isset($_POST['send'])):
                                        //Incluir librería de funciones
                                        require_once("comprobarimagen.php");
                                        //Verificar si se han enviado uno o varios archivos
                                        //valiéndonos de una expresión regular
                                        $archivos = array();
                                        if(!empty($_FILES['files']['name'][0])):
                                            $list = "<ol class=\"list-files\">\n";
                                                foreach($_FILES['files']['name'] as $i => $archivo):
                                                    $archivos[$i] = $archivo;
                                                    //Invocar a la función que verificará mediante
                                                    //expresión regular si el archivo pasado como
                                                    //argumento es o no es imagen.
                                                    $list .= "<li>\n<a href=\"#\">" . $archivos[$i] . comprobarimagen($archivos[$i]) . "</a>\n\t</li>\n";
                                                endforeach;
                                            $list .= "</ol>\n";
                                            echo $list;
                                        endif;
                                        //Obteniendo los datos del formulario
                                    else:
                                        ?>
                                        <form action="<?=$_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="col s12">
                                            <div class="row col s12">
                                                <div class="file-field input-field col s8">
                                                    <div class="btn">
                                                        <span>Adjuntar</span>
                                                        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                                                        <input type="file" name="files[]" multiple="multiple" />
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input type="text" class="file-path validate" placeholder="Seleccione sólo archivos de imagen" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col s4">
                                                <button type="submit" class="btn waves-effect waveslight" name="send">Agregar</button>
                                            </div>
                                        </form>
                                <?php
                                    endif;
                                ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="Codigo">Codigo de Producto</label>
                               <input type="text" id="codigo" name="codigo" class="form-control" required placeholder="Ingrese el codigo del producto">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="nombre">Nombre del Producto</label>
                               <input type="text" id="nombre" name="nombre" class="form-control" required placeholder="Ingrese el nombre del producto">
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="precio">Precio</label>
                               <input type="number" id="precio" name="precio" class="form-control" required placeholder="Ingrese el precio del producto">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                               <label for="categoria">Categoria</label>
                               <select name="categoria" id="categoria" class="form-control" required>
                                   <option value="textil">Textil</option>
                                   <option value="promocional">Promocional</option>
                               </select>
                           </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripcion:</label>
                                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Enviar" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>