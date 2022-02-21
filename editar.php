<?php

//$productos=simplexml_load_file('productos.xml');
//$prodcto=$productos->getDocNamespaces(true);

//$producto->addChild('nombre',$_POST['nombre']);
//$producto->addChild('descripcion',$_POST['descripcion']);
//$producto->addChild('img',$_POST['files[]']);
//$producto->addChild('categoria',$_POST['categoria']);
//$producto->addChild('precio',$_POST['precio']);
//$producto->addChild('existencias',$_POST['existencias']);
//file_put_contents('productos.xml',$productos->asXML());
//header('location:index.php?exito=1');

//$codigo=$_POST['codigo'];
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
copy($productos->producto[$indice],$productos);
file_put_contents('productos.xml' ,$productos->asXML());
header('location:index.php');
?>