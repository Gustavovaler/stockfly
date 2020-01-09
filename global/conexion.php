<?php
include('config.php');

$con = new mysqli(SERVIDOR,USUARIO,PASSWORD,BD);

if ($con->connect_error) {
	die('Falló al conectarse a la base de datos : '. $con->connect_error);

	}

?>