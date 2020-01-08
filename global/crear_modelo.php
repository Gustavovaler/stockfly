<?php
include('config.php');

$conexion = new mysqli(SERVIDOR,USUARIO,PASSWORD,BD);

if($conexion->connect_error){
	die("Conexion fallida : ". $conexion->connect_error);
}else{
	echo "Conectado a la dase de datos : ".BD.'<br>';
}

$tabla_usuarios = "CREATE TABLE IF NOT EXISTS fs_usuarios(
					id_usuario INT PRIMARY KEY AUTO_INCREMENT,
					nombre VARCHAR(30) NOT NULL,
					apellido VARCHAR(40) NOT NULL,
					nick VARCHAR(40) NOT NULL UNIQUE,
					password VARCHAR(255) NOT NULL,
					is_admin int DEFAULT 0,
					is_medium int DEFAULT 0,
					is_visitor int DEFAULT 1)
					ENGINE = InnoDB DEFAULT CHARSET = utf8";

$tabla_productos = "CREATE TABLE IF NOT EXISTS fs_productos(
					id_producto int PRIMARY KEY AUTO_INCREMENT,
					categoria VARCHAR(30) NOT NULL,
					modelo VARCHAR(40) DEFAULT NULL,
					color VARCHAR(30) NOT NULL,
					cantidad int  DEFAULT 0,
					talle int DEFAULT NULL,
					estampa VARCHAR(100) DEFAULT NULL,
					variante VARCHAR(50) DEFAULT NULL,
					combinacion VARCHAR(40) DEFAULT NULL,
					obs VARCHAR(50) DEFAULT NULL)
					ENGINE = InnoDB DEFAULT CHARSET = utf8";


$tabla_movimientos = "CREATE TABLE IF NOT EXISTS fs_movimientos (
					id_movimiento int PRIMARY KEY AUTO_INCREMENT,
					usuario int NOT NULL,
					producto int NOT NULL,
					fecha DATETIME DEFAULT current_timestamp())
					ENGINE = InnoDB DEFAULT CHARSET = utf8";

$claves_foraneas = "ALTER TABLE fs_movimientos add FOREIGN KEY (
					usuario) references fs_usuarios (id_usuario) on delete cascade on update cascade";

$claves_foraneas2 = "ALTER TABLE fs_movimientos add FOREIGN KEY (
					producto) references fs_productos (id_producto) on delete cascade on update cascade";



if ($conexion->query($tabla_usuarios)) {
	echo "Tabla usuarios creada con exito <br>";
}

if ($conexion->query($tabla_productos)) {
	echo "Tabla productos creada con exito <br>";
}

if ($conexion->query($tabla_movimientos)) {
	echo "Tabla movimientos creada con exito <br>";
}

if ($conexion->query($claves_foraneas)) {
	echo "Claves foraneas creadas con exito <br>";
}

if ($conexion->query($claves_foraneas2)) {
	echo "Claves foraneas 2 creadas con exito <br>";
}else{
	echo "Clave no creada<br>";
}

if(mysqli_close($conexion)){
	echo "Conexion Cerrada";
	}



?>