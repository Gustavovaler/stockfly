<?php
include('../global/conexion.php');
$descripcion =  $_GET['descripcion'];
$color = $_GET['color'];
$talle = $_GET['talle'];
$obs = $_GET['obs'];
$variante = $_GET['variante'];
$cantidad = $_GET['cantidad'];
$combinacion = $_GET['combinacion'];
$estampa = $_GET['estampa'];

echo  $descripcion.'//'.$color.'//'.$talle.'//'.$obs.'//'.$variante.'//'.$cantidad.'//'.$combinacion.'//'.$estampa;

$sql_guardar_nuevo = "INSERT INTO fs_productos (descripcion,talle,color,cantidad,variante,combinacion,obs,estampa)VALUES(
	'$descripcion','$talle','$color','$cantidad','$variante','$combinacion','$obs','$estampa')";
	echo $sql_guardar_nuevo;

if($con->query($sql_guardar_nuevo)){
	echo "Guardado";
}else{
	echo "No guardado :".$con->error;
}
;

?>