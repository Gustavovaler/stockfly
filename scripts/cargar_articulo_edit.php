<?php
include('../global/conexion.php');
?>

<?php

$id = $_GET['id_producto'];


$sql = "SELECT * FROM fs_productos WHERE id_producto = $id";

if ($consulta = $con->query($sql)) {
	foreach ($consulta as $key) {
		?>
		<input type="text" value="<?php echo $key['id_producto'];?>" disabled>
		<input type="text" value="<?php echo $key['descripcion'];?>">
		<input type="text" value="<?php echo $key['color'];?>">
		<input type="text" value="<?php echo $key['estampa'];?>">
		<input type="text" value="<?php echo $key['talle'];?>">
		<input type="number" value="<?php echo $key['cantidad'];?>">
		<input type="text" value="<?php echo $key['variante'];?>">
		<input type="number" value="<?php echo $key['precio'];?>">
		<input type="text" value="<?php echo $key['combinacion'];?>">
		<input type="text" value="<?php echo $key['obs'];?>">

		

	<?php	
	}
	?>
	<span id="guardar_edit">Guardar Cmabios</span>
	<?php
}



?>