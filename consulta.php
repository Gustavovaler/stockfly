<?php
	include('header.php');
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
			<td class="campos">Color</td>
			<td class="campos">Estampa</td>
			<td class="campos">Talle</td>
			<td class="campos">Variante</td>
			<td class="campos">Combinacion</td>
			<td class="campos">Extra</td>
			<td class="campos">Cantidad</td>
		</tr>
		<tr>
			<td class="datos">negro</td>
			<td class="datos"></td>
			<td class="datos">4</td>
			<td class="datos">Liso</td>
			<td class="datos">rojo/negro</td>
			<td class="datos"></td>
			<td class="datos">12</td>
		</tr>
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
