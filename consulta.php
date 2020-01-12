<?php
include('header.php');
include('global/conexion.php');
include('navegador.php');
?>
<link rel="stylesheet" href="css/consulta.css">
<div class="container">

<input type="text" id="entrada">

<table id="resultados">
	<tr id="fila">
		<td id="dato">Articulo</td>
		<td id="dato">Modelo</td>
		<td id="dato">Estampa</td>
		<td id="dato">Color</td>
		<td id="dato">Talle</td>
		<td id="dato">Cantidad</td>
		<td id="dato">Accion</td>
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

		consultarProducto(entrada.value);
	});

	function consultarProducto(cadena){
		let conn = new XMLHttpRequest();
		conn.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				div_respuesta.innerHTML = this.responseText;
			}
		}
		conn.open('GET','scripts/consulta_articulo.php?cadena='+entrada.value,true);
		conn.send()

	}

	
		
	

	
	
</script>