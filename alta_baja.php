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
		<button id="cargar_nuevo_div">Cargar Articulo Nuevo</button>
		<div id="art_nuevo">
			<label for="">Descripcion</label>
			<input type="text" class="campos"><br>
			<label for="">Color</label>
			<input type="text" class="campos"><br>
			<label for="">Cantidad</label>
			<input type="number" class="campos"><br>
			<label for="">Talle</label>
			<input type="text" class="campos"><br>
			<label for="">Estampa</label>
			<input type="text" class="campos"><br>
			<label for="">Variante</label>
			<input type="text" class="campos"><br>
			<label for="">Combinacion</label>
			<input type="text" class="campos"><br>
			<label for="">Obs</label>
			<input type="text" class="campos"><br>
			<br>
			<button>Guardar Modelo Nuevo</button>
			
		</div>
		<hr>
		<div id="art_agregar_stock">
			<div class="entrada">
				<input type="text" id="entrada">
			</div>
			<div class="desplegar_datos">
				<table>
					<tr>
						
					</tr>
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

		boton_div_nuevo.addEventListener("click",function(){
			toggle(art_nuevo_div);
		})

	</script>
</body>