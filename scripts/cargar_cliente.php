	<?php
	include('../global/conexion.php');

		$cadena = $_GET['cadena'];
		
		$sql = "SELECT * FROM fs_clientes WHERE nombre_completo LIKE '%$cadena%'";
		

		if ($cadena != '') {
				$consulta = $con->query($sql);

		if($consulta){	

			foreach ($consulta as $key) {		
			?>
			<table>
			<tr>
				<td id="cliente_id" width="10%"><?php echo $key['id_cliente'];?></td>
				<td class="datos categoria" id="nombre_cliente" width="50%"><?php echo $key['nombre_completo'];?></td>
				
				<td class="datos color" width="15%"><?php echo $key['descuento'];?></td>
				
					<?php
						if ($con->affected_rows == 1) {
							?>
							<td class="datos" width="25%">
							<button id="boton_seleccion_cliente" onclick="selectedCliente(<?php echo $key['id_cliente'];?>)">Seleccionar</button></td>
							<?php
						}
					?>
					
				
			</tr>
		</table>
			<?php
		
			}
			
			
			
		}
	}
	?>