<script>
	function guardado(){
		alert('Modelo registrado correctamente');
		window.location ='../alta_baja.php?buscar=';
	}
</script>

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


$sql_guardar_nuevo = "INSERT INTO fs_productos (descripcion,talle,color,cantidad,variante,combinacion,obs,estampa)VALUES(
	'$descripcion','$talle','$color','$cantidad','$variante','$combinacion','$obs','$estampa')";
	

if($con->query($sql_guardar_nuevo)){
	echo "<script> guardado();</script>";
}else{
	if($con->errno == 1062){
		echo "No guardado :".$con->error.'//'.$con->errno;
		echo "<script> alert('NO GUARDADO !! ESE ARTICULO YA EXISTE !!!'); window.location = '../alta_baja.php?buscar=';</script>";
	}
	
}
;

?>