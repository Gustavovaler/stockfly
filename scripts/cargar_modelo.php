<?php 
include('../global/conexion.php');
	$categoria = $_GET['id_categoria'];

	$sql_modelo = "SELECT modelo FROM fs_modelo where categoria = $categoria";

	$consulta_mod = $con->query($sql_modelo);
	foreach ($consulta_mod as $mod) {
		?>
         <option class="opcion" value="<?php echo $mod['modelo'];?> "><?php echo $mod['modelo'];?> </option>
	<?php
	}
	?>	