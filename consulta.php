<?php
include('header.php');
include('global/conexion.php');
include('navegador.php');
?>
<script src="js/scripts.js"></script>
<link rel="stylesheet" href="css/consulta.css">
<div class="container">

<input type="text" id="entrada">

<table id="resultados">
			<tr id="fila">
				<td id="dato" width="5%">Art</td>
				<td id="dato" width="20%">Modelo</td>
				<td id="dato" width="10%">Color</td>
				<td id="dato" width="15%">Estampa</td>
				
				<td id="dato" width="5%">Talle</td>
				<td id="dato" width="5%">Cant</td>
				<td id="dato" width="12%">Combinacion</td>
				<td id="dato" width="12%">Obs</td>
				<!--<td id="dato" width="16%">Accion</td>-->
			</tr>
	<table id="respuesta"></table>
</table>

</div>
<script>
	
	let infoPagina = document.getElementById('infoPagina');
	infoPagina.innerHTML = 'Consulta';
	let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Pagina de inicio. No hay mensajes";
	

	var div_respuesta = document.getElementById('respuesta');
	var entrada = document.getElementById('entrada');
	entrada.addEventListener("keyup",function(){

		consultarDb('GET','scripts/consulta_articulo.php?cadena='+entrada.value,div_respuesta);
	});
	
	
</script>