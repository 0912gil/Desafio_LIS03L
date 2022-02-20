<?php

//Mostrar todos los productos
function mostrarTodos()
{
    $contador = 0;
    $productos = simplexml_load_file('productos.xml');
    foreach ($productos->producto as $row) {
?>
        <div class="col-xs-12 col-md-6">
            <!-- First product box start here-->
            <div class="prod-info-main prod-wrap clearfix">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image">
                            <img src="img/<?= $row->img ?>" class="img-responsive">

                            <!--Etiquetas a las imágenes -->
                            <?php
                            if ($contador % 3 == 0) {
                                echo '<span class="tag2 hot">
							HOT
						</span>					
						<span class="tag2 hot">
							HOT
						</span>';
                            } else if ($contador % 3 == 1) {
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
                                    <?= $row->nombre ?>
                                </a>
                                <a href="#">
                                    <span><?= $row->codigo ?> -- <?= $row->categoria ?></span>
                                </a>

                            </h5>
                            <p class="price-container">
                                <b><span>$<?= $row->precio ?></span></b>
                            </p>
                            <span class="tag1"></span>
                        </div>
                        <div class="description">
                            <p><?= substr($row->descripcion, 0, 35) ?>...</p>
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
                                        if ($row->existencias > 0) {
                                            echo '<b>Stock: </b>' . $row->existencias;
                                        } else {
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
}
?>


<?php
//Mostrar Textil y Disponibles

function textilDisponibles()
{
    $contador = 0;
    $productos = simplexml_load_file('productos.xml');
    foreach ($productos->producto as $row) {
        if ($row->categoria == "Textil" && $row->existencias > 0) {
?>
            <div class="col-xs-12 col-md-6">
                <!-- First product box start here-->
                <div class="prod-info-main prod-wrap clearfix">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <img src="img/<?= $row->img ?>" class="img-responsive">

                                <!--Etiquetas a las imágenes -->
                                <?php
                                if ($contador % 3 == 0) {
                                    echo '<span class="tag2 hot">
							HOT
						</span>					
						<span class="tag2 hot">
							HOT
						</span>';
                                } else if ($contador % 3 == 1) {
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
                                        <?= $row->nombre ?>
                                    </a>
                                    <a href="#">
                                        <span><?= $row->codigo ?> -- <?= $row->categoria ?></span>
                                    </a>

                                </h5>
                                <p class="price-container">
                                    <b><span>$<?= $row->precio ?></span></b>
                                </p>
                                <span class="tag1"></span>
                            </div>
                            <div class="description">
                                <p><?= substr($row->descripcion, 0, 35) ?>...</p>
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
                                            if ($row->existencias > 0) {
                                                echo '<b>Stock: </b>' . $row->existencias;
                                            } else {
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
    }
}
?>


<?php
//Mostrar Promocional y Disponibles

function promocionalDisponibles()
{
    $contador = 0;
    $productos = simplexml_load_file('productos.xml');
    foreach ($productos->producto as $row) {
        if ($row->categoria == "Promocional" && $row->existencias > 0) {
?>
            <div class="col-xs-12 col-md-6">
                <!-- First product box start here-->
                <div class="prod-info-main prod-wrap clearfix">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <img src="img/<?= $row->img ?>" class="img-responsive">

                                <!--Etiquetas a las imágenes -->
                                <?php
                                if ($contador % 3 == 0) {
                                    echo '<span class="tag2 hot">
							HOT
						</span>					
						<span class="tag2 hot">
							HOT
						</span>';
                                } else if ($contador % 3 == 1) {
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
                                        <?= $row->nombre ?>
                                    </a>
                                    <a href="#">
                                        <span><?= $row->codigo ?> -- <?= $row->categoria ?></span>
                                    </a>

                                </h5>
                                <p class="price-container">
                                    <b><span>$<?= $row->precio ?></span></b>
                                </p>
                                <span class="tag1"></span>
                            </div>
                            <div class="description">
                                <p><?= substr($row->descripcion, 0, 35) ?>...</p>
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
                                            if ($row->existencias > 0) {
                                                echo '<b>Stock: </b>' . $row->existencias;
                                            } else {
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
    }
}
?>


<?php
//Mostrar Todos y Disponibles

function todosDisponibles()
{
    $contador = 0;
    $productos = simplexml_load_file('productos.xml');
    foreach ($productos->producto as $row) {
        if ($row->existencias > 0) {
?>
            <div class="col-xs-12 col-md-6">
                <!-- First product box start here-->
                <div class="prod-info-main prod-wrap clearfix">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <img src="img/<?= $row->img ?>" class="img-responsive">

                                <!--Etiquetas a las imágenes -->
                                <?php
                                if ($contador % 3 == 0) {
                                    echo '<span class="tag2 hot">
							HOT
						</span>					
						<span class="tag2 hot">
							HOT
						</span>';
                                } else if ($contador % 3 == 1) {
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
                                        <?= $row->nombre ?>
                                    </a>
                                    <a href="#">
                                        <span><?= $row->codigo ?> -- <?= $row->categoria ?></span>
                                    </a>

                                </h5>
                                <p class="price-container">
                                    <b><span>$<?= $row->precio ?></span></b>
                                </p>
                                <span class="tag1"></span>
                            </div>
                            <div class="description">
                                <p><?= substr($row->descripcion, 0, 35) ?>...</p>
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
                                            if ($row->existencias > 0) {
                                                echo '<b>Stock: </b>' . $row->existencias;
                                            } else {
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
    }
}
?>



<?php
//Mostrar Textil y Todos

function textilTodos()
{
    $contador = 0;
    $productos = simplexml_load_file('productos.xml');
    foreach ($productos->producto as $row) {
        if ($row->categoria == "Textil") {
?>
            <div class="col-xs-12 col-md-6">
                <!-- First product box start here-->
                <div class="prod-info-main prod-wrap clearfix">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <img src="img/<?= $row->img ?>" class="img-responsive">

                                <!--Etiquetas a las imágenes -->
                                <?php
                                if ($contador % 3 == 0) {
                                    echo '<span class="tag2 hot">
							HOT
						</span>					
						<span class="tag2 hot">
							HOT
						</span>';
                                } else if ($contador % 3 == 1) {
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
                                        <?= $row->nombre ?>
                                    </a>
                                    <a href="#">
                                        <span><?= $row->codigo ?> -- <?= $row->categoria ?></span>
                                    </a>

                                </h5>
                                <p class="price-container">
                                    <b><span>$<?= $row->precio ?></span></b>
                                </p>
                                <span class="tag1"></span>
                            </div>
                            <div class="description">
                                <p><?= substr($row->descripcion, 0, 35) ?>...</p>
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
                                            if ($row->existencias > 0) {
                                                echo '<b>Stock: </b>' . $row->existencias;
                                            } else {
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
    }
}
?>


<?php
//Mostrar Promocional y Todos

function promocionalTodos()
{
    $contador = 0;
    $productos = simplexml_load_file('productos.xml');
    foreach ($productos->producto as $row) {
        if ($row->categoria == "Promocional") {
?>
            <div class="col-xs-12 col-md-6">
                <!-- First product box start here-->
                <div class="prod-info-main prod-wrap clearfix">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="product-image">
                                <img src="img/<?= $row->img ?>" class="img-responsive">

                                <!--Etiquetas a las imágenes -->
                                <?php
                                if ($contador % 3 == 0) {
                                    echo '<span class="tag2 hot">
							HOT
						</span>					
						<span class="tag2 hot">
							HOT
						</span>';
                                } else if ($contador % 3 == 1) {
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
                                        <?= $row->nombre ?>
                                    </a>
                                    <a href="#">
                                        <span><?= $row->codigo ?> -- <?= $row->categoria ?></span>
                                    </a>

                                </h5>
                                <p class="price-container">
                                    <b><span>$<?= $row->precio ?></span></b>
                                </p>
                                <span class="tag1"></span>
                            </div>
                            <div class="description">
                                <p><?= substr($row->descripcion, 0, 35) ?>...</p>
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
                                            if ($row->existencias > 0) {
                                                echo '<b>Stock: </b>' . $row->existencias;
                                            } else {
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
    }
}
?>