<?php

include('../global/conexion.php');

$nombre = $_POST['nombre_completo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$email = $_POST['email'];
$revendedora = $_POST['revendedora'];
$cod_postal = $_POST['cod_postal'];
$descuento = $_POST['descuento'];
$dni =  $_POST['dni'];


$sql_guardar_cliente = "INSERT INTO fs_clientes (nombre_completo,direccion,ciudad,provincia,codigo_postal,
    email,telefono,dni,descuento,revendedora) VALUES $nombre ,$direccion,$ciudad, $provincia,
     $cod_postal, $email, $telefono, $dni, $descuento,  1";


    if ($con->query($sql_guardar_cliente)) {
    	echo "Guardado";
    }else{
    	echo "No Guardado ; ".$con->error;
    }
?>