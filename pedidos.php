<?php
include('header.php');
include('navegador.php');
?>
<link rel="stylesheet" href="css/consulta">
<script src="js/scripts.js"></script>
<body>
	<div class="container">
		<button>Nuevo Pedido</button>
		<div id="nuevo_pedido">
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

			</div>
			<div id="select_productos">
				<label for="">Seleccionar Productos</label>
				<input type="text" id="entrada_producto">

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
				<table id="respuesta_producto"></table>
				</table>

			</div>
			</div>
		
<!--		------------- DIV PEDIDO ----------------->	
    	<div id="pedido">
    		<div id="cliente_seleccionado_nombre">
    			
    		</div>
			
		</div>
	</div>
	</div><!-----Fin Container ------>



	<script>
		let infoPagina = document.getElementById('infoPagina');
	infoPagina.innerHTML = 'Pedidos';
	let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Pagina de inicio. No hay mensajes";


	var div_respuesta = document.getElementById('respuesta');
	var entrada = document.getElementById('entrada');
	entrada.addEventListener("keyup",function(){

		//consultarProducto(entrada.value);
		consultarDb('GET','scripts/cargar_cliente.php?cadena='+entrada.value,div_respuesta);
	});

	var div_respuesta_producto = document.getElementById('respuesta_producto');
	var entrada_producto = document.getElementById('entrada_producto');
	entrada_producto.addEventListener("keyup",function(){

		consultarDb('GET','scripts/consulta_articulo.php?cadena='+entrada_producto.value,div_respuesta_producto);
	});

	
	var selectedCliente = function(cliente_id){
		var cliente_nombre = document.getElementById('nombre_cliente');
		var div_nombre_cliente = document.getElementById('cliente_seleccionado_nombre');
		div_nombre_cliente.innerHTML = cliente_nombre.innerHTML;

	}


	</script>
</body>