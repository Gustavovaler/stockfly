	<?php
	include('../global/conexion.php');

		$cadena = $_GET['cadena'];
		
		$sql = "SELECT * FROM fs_productos WHERE descripcion LIKE '%$cadena%'";
		

		if ($cadena != '') {
				$consulta = $con->query($sql);

		if($consulta){	

			foreach ($consulta as $key) {		
			?>
			<tr>
				<td class="datos id_producto"><?php echo $key['id_producto'];?></td>
				<td class="datos categoria"><?php echo $key['descripcion'];?></td>
				
				<td class="datos color"><?php echo $key['color'];?></td>
				<td class="datos estampa"><?php echo $key['estampa'];?></td>
				<td class="datos talle"><?php echo $key['talle'];?></td>
				<td class="datos cantidad"><?php echo $key['cantidad'];?></td>
			</tr>
			<?php
		
			}}

	}
	?>