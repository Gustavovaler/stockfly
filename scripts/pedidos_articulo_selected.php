	<?php
	include('../global/conexion.php');

		$id= $_GET['producto'];
		
		$sql = "SELECT * FROM fs_productos WHERE id_producto= $id";
		

		if ($id != '') {
				$consulta = $con->query($sql);

		if($consulta){	

			foreach ($consulta as $key) {		
			?>
			
			<tr>
				<td class="" width="4%"><?php echo $key['id_producto'];?></td>
				<td class="" width="18%"><?php echo $key['descripcion'];?></td>				
				<td class="" width="8%"><?php echo $key['color'];?></td>
				<td class="" width="14%"><?php echo $key['estampa'];?></td>
				<td class="" width="5%"><?php echo $key['talle'];?></td>
				<td class="" width="12%"><?php echo $key['combinacion'];?></td>
				<td class="" width="10%"><?php echo $key['obs'];?></td>
				<td class="" width="6%"><?php echo $key['precio'];?></td>
				<td class="" width="10%">subtotal</td>
				<td class="" width="9%"><button class="bot_eliminar" onclick="removerProducto(this)">Del</button></td>
				
			</tr>
			<?php
		
			}
			
			
			
		}
	}
	?>