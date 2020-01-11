	<?php
	include('../global/conexion.php');
		$sql = "SELECT * FROM fs_productos";


		$consulta = $con->query($sql);

		foreach ($consulta as $key) {		
		?>
		<tr>
			<td class="datos id_producto"><?php echo $key['id_producto'];?></td>
			<td class="datos categoria"><?php echo $key['categoria'];?></td>
			<td class="datos modelo"><?php echo $key['modelo'];?></td>
			<td class="datos color"><?php echo $key['color'];?></td>
			<td class="datos estampa"><?php echo $key['estampa'];?></td>
			<td class="datos talle"><?php echo $key['talle'];?></td>
			<td class="datos cantidad"><?php echo $key['cantidad'];?></td>
		</tr>
		<?php
	}
	?>