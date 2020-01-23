<?php
include('../global/conexion.php');



$sql = "SELECT id_pedido FROM fs_pedido ORDER BY id_pedido DESC LIMIT 1";

if($consulta = $con->query($sql)) {
	foreach ($consulta as $key ) {
		echo $key['id_pedido'];
	}
}else
{
	echo $con->error;
}
?>