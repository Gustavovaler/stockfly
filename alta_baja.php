<?php
include('header.php');
include('navegador.php');
?>
<link rel="stylesheet" href="css/alta_baja.css">
<link rel="stylesheet" href="css/consulta.css">
<link rel="stylesheet" href="css/alta_baja.css">
<script src="js/scripts.js"></script>
<body>
	<div class="container">
		<div class="separador">
			<p>Presiona Cargar articulo nuevo para ingresar un articulo por primera vez</p>
		</div>
		<button id="cargar_nuevo_div">Cargar Articulo Nuevo</button>
		<hr>
		<div id="art_nuevo">
		
			<form action="scripts/guardar_modelo_nuevo.php" method="GET">
			<label for="">Descripcion</label>
			<input type="text" class="campos" name="descripcion" required><br>
			<label for="">Color</label>
			<input type="text" class="campos" name="color" required><br>
			<label for="">Cantidad</label>
			<input type="number" class="campos" name="cantidad" value="0"><br>
			<label for="">Talle</label>
			<input type="text" class="campos" name="talle"><br>
			<label for="">Estampa</label>
			<input type="text" class="campos" name="estampa"><br>
			<label for="">Variante</label>
			<input type="text" class="campos" name="variante"><br>
			<label for="">Combinacion</label>
			<input type="text" class="campos" name="combinacion"><br>
			<label for="">Obs</label>
			<input type="text" class="campos" name="obs"><br>
			<br>
			<button id="guardar_nuevo_modelo" type="submit" >Guardar Modelo Nuevo</button>
			</form>
		</div>
		
		
		<br>
		<div class="info">Modificar stock</div>
		<div id="art_agregar_stock">
			<div class="entrada">
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
			
		</div>

	</div>



	<script>
		//-----------------------------------------------------
		let infoPagina = document.getElementById('infoPagina');
	infoPagina.innerHTML = 'Alta y Baja de productos';
	let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Pagina de inicio. No hay mensajes";
		//---------------------------------------------------------

		//------------- variables -----------
		var art_nuevo_div = document.getElementById('art_nuevo');
		var boton_div_nuevo = document.getElementById('cargar_nuevo_div');
		

		//----------- controles de eventos ---------
		boton_div_nuevo.addEventListener("click",function(){
			toggle(art_nuevo_div);
		});

		

		//--------- FUNCIONES--------
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
</body>