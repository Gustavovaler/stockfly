<?php
include('../global/conexion.php');


$id_cliente = $_GET['id_cliente'];
$id_usuario = $_GET['id_usuario'];
$senia  = $_GET['senia'];
$pagado_total = $_GET['pagado_total'];
$fecha_entrega = $_GET['fecha_entrega'];
$entregado = $_GET['entregado'];
$importe_total = $_GET['importe_total'];
$saldo = $_GET['saldo'];

$sql_pedido = "INSERT INTO fs_pedido (
					id_cliente,
					id_usuario,
					senia,
					pagado_total,
					fecha_entrega,
					entregado,
					importe_total,
					saldo) VALUES (
					'$id_cliente',
					'$id_usuario',
					0,
					0,
					'$fecha_entrega',
					'$entregado',
					'$importe_total',
					0) ";

echo $sql_pedido;

if ($con->query($sql_pedido)) {
	echo "Guardado";
}else{
	echo $con->error;
}





?>