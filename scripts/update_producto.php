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
$precio = $_GET['precio'];
$id = $_GET['id_producto'];

$sql_guardar_nuevo = "UPDATE fs_productos SET 
						descripcion = '$descripcion',
						talle = '$talle',
						color = '$color',
						cantidad = '$cantidad',
						variante = '$variante',
						combinacion = '$combinacion',
						obs = '$obs',
						estampa = '$estampa',
						precio = '$precio'
							 WHERE id_producto = $id";
echo $sql_guardar_nuevo;
$con->query($sql_guardar_nuevo);
if ($con->error) {
	echo $con->error.' // cod.'.$con->errno;
}

?>