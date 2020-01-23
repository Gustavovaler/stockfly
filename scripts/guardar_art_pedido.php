<?php 
include('../global/conexion.php');

$id_producto = $_GET['id_producto'];
$id_pedido = $_GET['id_pedido'];


$sql = "INSERT INTO fs_pedido_lista (id_producto,id_pedido) VALUES ('$id_producto', '$id_pedido') ";

$con->query($sql);




?>