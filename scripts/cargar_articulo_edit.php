<?php
include('../global/conexion.php');
?>

<?php

$id = $_GET['id_producto'];


$sql = "SELECT * FROM fs_productos WHERE id_producto = $id";

if ($consulta = $con->query($sql)) {
	foreach ($consulta as $key) {
		?>
		<label for="" class="in_line">Art</label>
		<input type="text"  id="id_producto" value="<?php echo $key['id_producto'];?>" disabled>
		<label for="" class="in_line">Descripcion</label>
		<input type="text"  id="descripcion" value="<?php echo $key['descripcion'];?>" maxlength="80" required>
		<br>
		<label for="" class="in_line">Color</label>
		<input type="text"  id="color" value="<?php echo $key['color'];?>"  maxlength="30" required>
		<label for="" class="in_line">Estampa</label>
		<input type="text"  id="estampa" value="<?php echo $key['estampa'];?>" maxlength="100">
		<br>
		<label for="" class="in_line">Talle</label>
		<input type="text"  id="talle" value="<?php echo $key['talle'];?>" maxlength="8" required>
		<label for="" class="in_line">cantidad</label>
		<input type="number"  id="cantidad" value="<?php echo $key['cantidad'];?>"  maxlength="5">
		<br>
		<label for="" class="in_line">Variante</label>
		<input type="text" id="variante" value="<?php echo $key['variante'];?>" maxlength="50">
		<label for="" class="in_line">Precio</label>
		<input type="number"  id="precio" value="<?php echo $key['precio'];?>" maxlength="10">
		<br>
		<label for="" class="in_line" >Combinacion</label>
		<input type="text"  id="combinacion" value="<?php echo $key['combinacion'];?>"maxlength="40">
		<label for="" class="in_line">Obs</label>
		<input type="text"  id="obs" value="<?php echo $key['obs'];?>" maxlength="50">
		<br>

		

	<?php	
	}
	?>
	<button id="guardar_edit" onclick="guardarEdicion(<?php echo $key['id_producto'];?>)">Guardar Cambios</button>
	<button onclick="toggle(edit_prod)">Cancelar</button>
	<?php
}



?>