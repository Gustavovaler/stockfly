<script>
	function guardado(){
		alert('Cliente registrado correctamente');
		window.location ='../clientes.php?buscar=';
	}
</script>
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


$sql_guardar_cliente = "INSERT INTO fs_clientes(nombre_completo,direccion,ciudad,provincia,codigo_postal,
    email,telefono,dni,descuento,revendedora) VALUES('$nombre', '$direccion','$ciudad', '$provincia',
     '$cod_postal', '$email', '$telefono', '$dni', '$descuento', $revendedora)";

echo '<br> sql : '.$sql_guardar_cliente.'<br>';

    if ($con->query($sql_guardar_cliente)) {
    	echo "<script> guardado();</script>";
    }else{
        if ($con->errno == 1062) {
            echo '<script> alert("No guardado !! ..Cliente ya existe");</script>';
            echo "<script>window.location='../clientes.php';</script>";
        }
    	
    }
?>
