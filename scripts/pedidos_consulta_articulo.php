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
				<td class="datos categoria" width="20%"><?php echo $key['descripcion'];?></td>
				
				<td class="datos color" width="10%"><?php echo $key['color'];?></td>
				<td class="datos estampa" width="14%"><?php echo $key['estampa'];?></td>
				<td class="datos talle" width="5%"><?php echo $key['talle'];?></td>
				<td class="datos cantidad" width="5%"><?php echo $key['cantidad'];?></td>
				<td class="datos combinacion" width="10%"><?php echo $key['combinacion'];?></td>
				<td class="datos obs" width="9%"><?php echo $key['obs'];?></td>
				<td class="datos obs" width="7%"><?php echo $key['precio'];?></td>
				<?php 
					if ($con->affected_rows != 0) {
						?>
						<td class="datos" width="15%"><button onclick="agregarAlPedido(<?php echo $key['id_producto'];?>)">Seleccionar</button></td>
									
								
					<?php	
					}
					?>
			</tr>
			<?php
		
			}
			
			
			
		}
	}
	?>