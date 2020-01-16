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
				<td class="datos id_producto" width="4%"><?php echo $key['id_producto'];?></td>
				<td class="datos categoria" width="18%"><?php echo $key['descripcion'];?></td>
				
				<td class="datos color" width="8%"><?php echo $key['color'];?></td>
				<td class="datos estampa" width="15%"><?php echo $key['estampa'];?></td>
				<td class="datos talle" width="5%"><?php echo $key['talle'];?></td>
				<td class="datos cantidad" width="5%"><?php echo $key['cantidad'];?></td>
				<td class="datos combinacion" width="10%"><?php echo $key['combinacion'];?></td>
				<td class="datos obs" width="10%"><?php echo $key['obs'];?></td>
				<td class="datos obs" width="8%"><?php echo $key['precio'];?></td>
				<td class="datos botones" width="16%">
					<button class="boton_edit_prod" onclick="editarProducto(<?php echo $key['id_producto'];?>)">Edit</button><button id="borrar">Borrar</button>
				</td>
			</tr>
			<?php
		
			}}

	}
	?>