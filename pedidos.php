<?php
include('header.php');
include('navegador.php');
?>
<link rel="stylesheet" href="css/consulta">
<link rel="stylesheet" href="css/pedidos.css">

<script src="js/scripts.js"></script>
<body>
	<div class="container">
		<button onclick="toggle(nuevo_pedido)">Nuevo Pedido</button>
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

			</div>
			</div>
			
		<div class="info_general2">
			
		</div>
		<label for="">Cliente:</label>
<!--		------------- DIV PEDIDO ----------------->	
    	<div id="pedido" >
    		<div >
    			<label for="" id="cliente_seleccionado_nombre"></label>
    		</div>
    		<table id="articulos_seleccionados">
    			
    		</table>
			<table><tr><td>Subtotal</td><td id="subtotal"></script></td></tr></table>
		</div>
		<div id="guardar_pe">
			<button id="guardar_pedido">
				Guardar pedido
			</button>
		</div>
		</div>
	</div><!-----Fin Container ------>
	<span id="ultimo_pedido" style="display: none;"></span>

	<script>


	
	var gaurdar_pe = document.getElementById('guardar_pe');
	var ultimo_pedido = document.getElementById('ultimo_pedido');
	var carrito = new Array();
	var guardar_pedido =document.getElementById('guardar_pedido');
		guardar_pedido.addEventListener("click", function(){
			guardarPedido();
		});
	var articulos_seleccionados = document.getElementById('articulos_seleccionados');
	let infoPagina = document.getElementById('infoPagina');
		infoPagina.innerHTML = 'Pedidos';
	let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Pagina de inicio. No hay mensajes";

	var subtotal_td = document.getElementById('subtotal');
	var nuevo_pedido = document.getElementById('nuevo_pedido');


	var div_respuesta = document.getElementById('respuesta');
	var entrada = document.getElementById('entrada');
	entrada.addEventListener("keyup",function(){

		//consultarProducto(entrada.value);
		consultarDb('GET','scripts/cargar_cliente.php?cadena='+entrada.value,div_respuesta);
	});

	var div_respuesta_producto = document.getElementById('respuesta_producto');
	var entrada_producto = document.getElementById('entrada_producto');
	entrada_producto.addEventListener("keyup",function(){

		consultarDb('GET','scripts/pedidos_consulta_articulo.php?cadena='+entrada_producto.value,div_respuesta_producto);
	});

	
	var selectedCliente = function(cliente_id){
		var cliente_nombre = document.getElementById('nombre_cliente');
		var div_nombre_cliente = document.getElementById('cliente_seleccionado_nombre');
		div_nombre_cliente.innerHTML = cliente_nombre.innerHTML;

	}

	var agregarAlPedido = function(id_producto){
		
		let con_js=new XMLHttpRequest();
		con_js.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				articulos_seleccionados.insertAdjacentHTML('beforeend',this.responseText);
				calcularSubtotal();
				
			}
		}
		con_js.open('GET','scripts/pedidos_articulo_selected.php?producto='+id_producto,true);
		con_js.send();
			
		
	}

	var removerProducto = function(bot){
		let td = bot.parentNode;
		let tr = td.parentNode;
		let tbody = tr.parentNode
		
		tbody.removeChild(tr);
		calcularSubtotal();
	}

	var calcularSubtotal = function(){
		carrito=0;
		let precio_unit = document.getElementsByClassName('precio');
		for (let i = precio_unit.length - 1; i >= 0; i--) {
			
			subtotal_td.innerHTML = '$ '+ (carrito += parseInt(precio_unit[i].innerHTML));
		}
		consultarDb('GET','scripts/ultimo_pedido.php',ultimo_pedido);
			
	}

	var pedido_list = [];

	var guardarPedido = function(){
		//array para colectar los id de productos elegidos
		pedido_list = [];
		
		var id_prod_selected = document.getElementsByClassName('art-selected');

		//se agregan los productos al array pedido_list
		for (let i = id_prod_selected.length - 1; i >= 0; i--) {
			pedido_list.push(id_prod_selected[i].innerHTML);
		}

		let id_cliente = document.getElementById('cliente_id');

		consultarDb('GET','scripts/ultimo_pedido.php',ultimo_pedido);
		console.log(ultimo_pedido.innerHTML);

		//guarda el pedido en la tabla fs_pedidos
		consultarDb('GET','scripts/guardar_pedido.php?id_cliente='+id_cliente.innerHTML+'&id_usuario=1&senia=&pagado_total=l&fecha_entrega=&entregado=&importe_total='+carrito+'&saldo=',null);
		//recorre el array de productos y guarda cada uno en la tabla fs_pedido_lista

		for (var i = pedido_list.length - 1; i >= 0; i--) {
			consultarDb('GET','scripts/guardar_art_pedido.php?id_producto='+pedido_list[i]+'&id_pedido='+(parseInt(ultimo_pedido.innerHTML)+1 ),null);
		}

		toggle(pedido);
		toggle(guardar_pe);
		alert('Pedido Guardado');

	};

	

	</script>
</body>