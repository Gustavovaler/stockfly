<?php
	include('header.php');
	include('global/conexion.php');
?>
<link rel="stylesheet" href="css/base.css">

<body>
	<!--Se incluye la barra de navegacion -->
<?php
	include('navegador.php');
?>

<link rel="stylesheet" href="css/consulta.css">

<!--***************CONTENIDO DE LA PAGINA-->
<div class="container">
<div class="categoria">
	
	<label for="producto">Categoría</label>
</div>
<select name="producto" id="selectCategoria">
	<option class="opcion" value="Pantalon">Seleccione Articulo </option>
	<option class="opcion" value="">Remera </option>
	<option class="opcion" value="">Musculosa</option>
	<option class="opcion" value="">Malla</option>
	<option class="opcion" value="">Sudadera</option>
	<option class="opcion" value="">Pollerin</option>
	<option class="opcion" value="">Medias</option>
	<option class="opcion" value="">Tutu</option>
	<option class="opcion" value="">Enterito</option>
	<option class="opcion" value="">Shot</option>
</select>
	<div class="subCategoria">
	<label for="subProducto">Sub Categoría</label>
</div>
<select name="subProducto" id="selectCategoria">
	<option class="opcion" value="Pantalon">Seleccione Modelo </option>
	<option class="opcion" value="">Remera </option>
	<option class="opcion" value="">Musculosa</option>
	<option class="opcion" value="">Malla</option>
	<option class="opcion" value="">Sudadera</option>
	<option class="opcion" value="">Pollerin</option>
	<option class="opcion" value="">Medias</option>
	<option class="opcion" value="">Tutu</option>
	<option class="opcion" value="">Enterito</option>
	<option class="opcion" value="">Shot</option>
</select>
<label for="">Resultados</label>
<div class="resultados">
	<table>
		<tr>
			<td class="art">Art.</td>
			<td class="campos">Categoria</td>
			<td class="campos">Modelo</td>
			<td class="campos">Color</td>
			<td class="campos">Estampa</td>
			<td class="">Talle</td>
			<td class="">Cantidad</td>
		</tr>
		<?php
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
	</table> 
</div>



<!--******fin container************-->
</div>



<script>
		let infoPagina = document.getElementById('infoPagina');
		infoPagina.innerHTML = 'Consulta';
		let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Mensaje de la pagina consulta de stock \n No lleva password";
</script>	
</body>
