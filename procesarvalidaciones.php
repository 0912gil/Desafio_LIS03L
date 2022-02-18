<?php
require 'validaciones.php';
if(isset($_POST)){
    extract($_POST);
    $errores=array();
    if(!isset($nombre)||estaVacio($nombre)){
        array_push($errores, "Debes ingresar el nombre");
    }
    else if (!esTexto($nombre)){
        array_push($errores, "El nombre debe contener solo letras");
    }

    if(!isset($codigo)||estaVacio($codigo)){
        array_push($errores, "Debes ingresar el código");
    }
    else if (!esCodigo($codigo)){
        array_push($errores, "Código no válido");
    }
}
?>