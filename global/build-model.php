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
					precio DECIMAL (10,2) DEFAULT NULL,
					descripcion VARCHAR(80) NOT NULL,
					color VARCHAR(30) NOT NULL,
					cantidad int  DEFAULT 0,
					talle VARCHAR(8) DEFAULT NULL,
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

$tabla_clientes = "CREATE TABLE IF NOT EXISTS fs_clientes(
					id_cliente int PRIMARY KEY AUTO_INCREMENT,
					nombre_completo VARCHAR(80) NOT NULL UNIQUE,
					direccion VARCHAR(200) DEFAULT NULL,
					ciudad VARCHAR(100) DEFAULT NULL,
					provincia VARCHAR(30) DEFAULT NULL,
					codigo_postal int DEFAULT 0000,
					email VARCHAR(150) DEFAULT NULL,
					telefono bigint DEFAULT NULL,
					dni int DEFAULT NULL,
					revendedora boolean DEFAULT 0,
					descuento int DEFAULT 0)
					ENGINE = InnoDB DEFAULT CHARSET = utf8";

$tabla_categoria = "CREATE TABLE IF NOT EXISTS fs_categoria(
					id_categoria int PRIMARY KEY AUTO_INCREMENT,
					categoria VARCHAR(50) NOT NULL)
					ENGINE= InnoDB DEFAULT CHARSET = utf8";
					
$tabla_modelo =    "CREATE TABLE IF NOT EXISTS fs_modelo(
					id_modelo int PRIMARY KEY AUTO_INCREMENT,
					modelo VARCHAR (60) NOT NULL,
					categoria INT NOT NULL)
					ENGINE  = InnoDB DEFAULT CHARSET = utf8";

$tabla_pedido =    " CREATE TABLE IF NOT EXISTS fs_pedido(
					id_pedido INT PRIMARY KEY AUTO_INCREMENT,
					id_cliente INT NOT NULL,
					fecha timestamp DEFAULT current_timestamp(),
					id_usuario int NOT NULL,
					senia DECIMAL (10,2) default 0,
					pagado_total INT DEFAULT 0,
					fecha_entrega VARCHAR(15) DEFAULT NULL,
					entregado VARCHAR (10) DEFAULT NULL,
					importe_total decimal (10,2) NOT NULL,
					saldo decimal (10,2) DEFAULT 0)
					ENGINE = InnoDB DEFAULT CHARSET =utf8";

$tabla_pedido_lista = "CREATE TABLE IF NOT EXISTS fs_pedido_lista(
						id_pedido_lista INT PRIMARY KEY AUTO_INCREMENT,
						id_pedido INT NOT NULL,
						id_producto INT NOT NULL)
						ENGINE = InnoDB DEFAULT CHARSET = utf8";
								

$claves_foraneas = "ALTER TABLE fs_movimientos add FOREIGN KEY (
					usuario) references fs_usuarios (id_usuario) on delete cascade on update cascade";

$claves_foraneas2 = "ALTER TABLE fs_movimientos add FOREIGN KEY (
					producto) references fs_productos (id_producto) on delete cascade on update cascade";

$claves_foraneas3 = "ALTER TABLE fs_pedido add FOREIGN KEY (
					id_cliente) references fs_clientes (id_cliente) on delete cascade on update cascade";


$claves_foraneas4 = "ALTER TABLE fs_pedido add FOREIGN KEY (
					id_usuario) references fs_usuarios (id_usuario) on delete cascade on update cascade";

$claves_foraneas5 = "ALTER TABLE fs_pedido_lista add FOREIGN KEY (
					id_pedido) references fs_pedido (id_pedido) on delete cascade on update cascade";

$claves_foraneas6 = "ALTER TABLE fs_pedido_lista add FOREIGN KEY (
					id_producto) references fs_productos (id_Producto) on delete cascade on update cascade";				

if ($conexion->query($tabla_usuarios)) {
	echo "Tabla usuarios creada con exito <br>";
}else{
	echo "Tabla usuarios NO creada :".$conexion->error.'Cod:'.$conexion->errno.'<br>';
}

if ($conexion->query($tabla_productos)) {
	echo "Tabla productos creada con exito <br>";
}else{
	echo "Tabla productos NO creada :".$conexion->error.'Cod:'.$conexion->errno.'<br>';
}

if ($conexion->query($tabla_movimientos)) {
	echo "Tabla movimientos creada con exito <br>";
}else{
	echo "Tabla movimientos NO creada :".$conexion->error.'Cod:'.$conexion->errno.'<br>';
}

if ($conexion->query($tabla_clientes)) {
	echo "Tabla clientes creada con exito <br>";
}else{
	echo "Tabla clientes NO creada :".$conexion->error.'Cod:'.$conexion->errno.'<br>';
}

if($conexion->query($tabla_pedido)){
	echo "Tabla pedido creada con exito <br>";
}else{
	echo "Tabla pedido No creada: ".$conexion->error.' Cod: '.$conexion->errno.'<br>';
}
if($conexion->query($tabla_pedido_lista)){
	echo "Tabla pedido/lista creada con exito <br>";
}else{
	echo "Tabla pedido/lista  No creada: ".$conexion->error.' Cod: '.$conexion->errno.'<br>';
}


if ($conexion->query($claves_foraneas)) {
	echo "Claves foraneas creadas con exito <br>";
}else{
	echo "Clave no creadaCod:".$conexion->errno.'<br>';
}

if ($conexion->query($claves_foraneas2)) {
	echo "Claves foraneas 2 creadas con exito <br>";
}else{
	echo "Clave2 no creadaCod:".$conexion->errno.'<br>';
}

if ($conexion->query($tabla_categoria)) {
	echo "Tabla categoria creada con exito <br>";
}else{
	echo "Tabla categoria no creadaCod:".$conexion->errno.'<br>';
}
if ($conexion->query($tabla_modelo)) {
	echo "Tabla modelo creada con exito <br>";
}else{
	echo "Tabla modelo No creada Cod:".$conexion->errno.'<br>';
}
if ($conexion->query($claves_foraneas3)) {
	echo "Claves foraneas 3 creadas con exito <br>";
}else{
	echo "Clave3 no creada Cod:".$conexion->errno.'//'.$conexion->error.'<br>';
}

if ($conexion->query($claves_foraneas4)) {
	echo "Claves foraneas 4 creadas con exito <br>";
}else{
	echo "Clave 4 no creada Cod:".$conexion->errno.'//'.$conexion->error.'<br>';
}

if ($conexion->query($claves_foraneas5)) {
	echo "Claves foraneas 5 creadas con exito <br>";
}else{
	echo "Clave5 no creadaCod:".$conexion->errno.'//'.$conexion->error.'<br>';
}

if ($conexion->query($claves_foraneas6)) {
	echo "Claves foraneas 6 creadas con exito <br>";
}else{
	echo "Clave6 no creadaCod:".$conexion->errno.'//'.$conexion->error.'<br>';
}

if(mysqli_close($conexion)){
	echo "Conexion Cerrada";
	}



?>