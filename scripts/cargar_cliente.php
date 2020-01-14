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
				<td class="datos id_producto" width="10%"><?php echo $key['id_cliente'];?></td>
				<td class="datos categoria" width="50%"><?php echo $key['nombre_completo'];?></td>
				
				<td class="datos color" width="15%"><?php echo $key['descuento'];?></td>
				<td class="datos" width="25%">
					<button>Seleccionar</button></td>
				
			</tr>
		</table>
			<?php
		
			}
			
			
			
		}
	}
	?>