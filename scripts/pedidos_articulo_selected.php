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
				<td class="id_producto" width="5%"><?php echo $key['id_producto'];?></td>
				<td class="categoria" width="20%"><?php echo $key['descripcion'];?></td>
				
				<td class="color" width="10%"><?php echo $key['color'];?></td>
				<td class="estampa" width="15%"><?php echo $key['estampa'];?></td>
				<td class="talle" width="5%"><?php echo $key['talle'];?></td>
				<td class="cantidad" width="5%"><?php echo $key['cantidad'];?></td>
				<td class="combinacion" width="12%"><?php echo $key['combinacion'];?></td>
				<td class="obs" width="12%"><?php echo $key['obs'];?></td>
				
			</tr>
			<?php
		
			}
			
			
			
		}
	}
	?>