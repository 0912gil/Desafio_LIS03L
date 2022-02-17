<!-- Nuevo producto -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Nuevo Producto</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="agregar.php">
                <div class="row form-group">
                    <div class="col-sm-2">
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
                                                <input type="hidden" name="MAX_FILE_SIZE" value="2097152" placeholder="Seleccione sólo archivos de imagen"/>
                                                <input for="img" type="file" name="files[]" multiple="multiple" />
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            <?php
                            endif;
                            ?>
                    </div>
                </div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" id="nombre">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="precio">Precio:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="2" max="5" class="form-control" name="precio" id="precio">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="categoria" >Categoría:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" max="10" step="0.1" class="form-control" name="categoria" id="categoria">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="descripcion">Descripción:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="2" max="5" class="form-control" name="descripcion" id="descripcion">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" for="existencia">Existencia:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="2" max="5" class="form-control" name="existencia" id="existencia">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</a>
			</form>
            </div>
 
        </div>
    </div>
</div>