<?php
$codigo=$_GET['codigo'];
$productos=simplexml_load_file('productos.xml');
$indice=0;
$i=0;
foreach ($productos->producto as $row) {
    if($row->codigo==$codigo){
        $indice=$i;
        break;
    }
    $i++;
}
is_uploaded_file($productos->producto[$indice]);
file_put_contents('productos.xml' ,$productos->asXML());
header('location:index.php');
?>