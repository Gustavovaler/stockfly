<?php
include('../global/conexion.php');
?>

<?php

$id = $_GET['id_producto'];


$sql = "SELECT * FROM fs_productos WHERE id_producto = $id";

if ($consulta = $con->query($sql)) {
	foreach ($consulta as $key) {
		?>
		<input type="text"  id="id_producto" value="<?php echo $key['id_producto'];?>" disabled>
		<input type="text"  id="descripcion" value="<?php echo $key['descripcion'];?>">
		<input type="text"  id="color" value="<?php echo $key['color'];?>">
		<input type="text"  id="estampa" value="<?php echo $key['estampa'];?>">
		<input type="text"  id="talle" value="<?php echo $key['talle'];?>">
		<input type="number"  id="cantidad" value="<?php echo $key['cantidad'];?>">
		<input type="text" id="variante" value="<?php echo $key['variante'];?>">
		<input type="number"  id="precio" value="<?php echo $key['precio'];?>">
		<input type="text"  id="combinacion" value="<?php echo $key['combinacion'];?>">
		<input type="text"  id="obs" value="<?php echo $key['obs'];?>">

		

	<?php	
	}
	?>
	<button id="guardar_edit" onclick="guardarEdicion(<?php echo $key['id_producto'];?>)">Guardar Cambios</button>
	<?php
}



?>