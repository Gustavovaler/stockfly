<?php
include('header.php');
include('navegador.php');
?>
<link rel="stylesheet" href="css/ventas.css">
<link rel="stylesheet" href="css/consulta.css">
<script src="js/scripts.js"></script>

<body>
	<div class="container">
		<button onclick="toggle(nueva)" id="bot-nueva">Nueva venta</button>
		<div id="nueva-venta">
			<div id="select_cliente">
				<label for="">Seleccionar Cliente</label>
				<input type="text" id="entrada">
				<table>
					<tr>
						<td width="10%" >Nro</td>
						<td width="50%" >Nombre Completo</td>
						<td width="15%" >Descuento</td>
						<td width="25%" >Accion</td>
					</tr>
				</table>
				<div id="respuesta">
					
				</div>
			<div id="select_productos">
				<label for="">Seleccionar Productos</label>
				<input type="text" id="entrada_producto">

				<table id="resultados">
					<tr id="fila">
						<td id="dato" width="4%">Art</td>
						<td id="dato" width="20%">Modelo</td>
						<td id="dato" width="10%">Color</td>
						<td id="dato" width="14%">Estampa</td>
								
						<td id="dato" width="5%">Talle</td>
						<td id="dato" width="5%">Cant</td>
						<td id="dato" width="10%">Combinacion</td>
						<td id="dato" width="9%">Obs</td>
						<td id="dato" width="7%">Precio</td>
						<td id="dato" width="15%" >Accion</td>
					</tr>
				<table id="respuesta_producto"></table>

				</table>

			</div><!--productos-->




		</div><!--cliente-->
		</div><!--nueva venta-->
		
    </div><!--container-->


	<script>

		let infoPagina = document.getElementById('infoPagina');
		infoPagina.innerHTML = 'Ventas';
		let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Pagina de inicio. No hay mensajes";
//--------------------------------------------------------------------

		var nueva = document.getElementById('nueva-venta');

		
	</script>
</body>