<?php
include('header.php');
include('navegador.php');
?>
<link rel="stylesheet" href="css/alta_baja.css">
<link rel="stylesheet" href="css/consulta.css">
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
			<input type="text" class="campos" name="descripcion" maxlength="80" required><span class="pista">Hasta 80 caracteres. Obligatorio</span><br>

			<label for="">Color</label>
			<input type="text" class="campos" name="color" maxlength="30" required><span class="pista">Hasta 30 caracteres. Obligatorio</span><br>

			<label for="">Cantidad</label>
			<input type="number" class="campos" name="cantidad" value="0" maxlength="5"><span class="pista" required>Numero positivo. Predeterminado 0.</span><br>

			<label for="">Talle</label>
			<input type="text" class="campos" name="talle" maxlength="8" required><span class="pista">Talle . Numero o letra. Obligatorio</span><br>
			<label for="">Estampa</label>
			<input type="text" class="campos" name="estampa" maxlength="100"><span class="pista">Hasta 100 caracteres.Opcional.</span><br>
			<label for="">Variante</label>
			<input type="text" class="campos" name="variante" maxlength="50"><span class="pista">Hasta 50 caracteres.Opcional.</span><br>
			<label for="">Combinacion</label>
			<input type="text" class="campos" name="combinacion" maxlength="40"><span class="pista">Hasta 40 caracteres.Opcional.</span><br>

			<label for="">Obs</label>
			<input type="text" class="campos" name="obs" maxlength="50"><span class="pista">Hasta 50 caracteres.Opcional.</span><br>
			<label for="">Precio</label>
			<input type="number" class="campos" name="precio" maxlength="10"><span class="pista">Pesos SIN centavos.</span><br>
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
				<td id="dato" width="4%">Art</td>
				<td id="dato" width="18%">Modelo</td>
				<td id="dato" width="8%">Color</td>
				<td id="dato" width="15%">Estampa</td>
				
				<td id="dato" width="5%">Talle</td>
				<td id="dato" width="5%">Cant</td>
				<td id="dato" width="10%">Combinacion</td>
				<td id="dato" width="10%">Obs</td>
				<td id="dato" width="8%">Precio</td>
				<td id="dato" width="16%">Accion</td>
			</tr>
			<table id="respuesta"></table>
		</table>
			</div>
			
		</div>
		<div id="edit_div">
			<label for="">Editar Producto.</label>
			
		
			<div id="edit_interface" >
				
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
		var edit_prod = document.getElementById('edit_interface');
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

		//consultarProducto(entrada.value);
		consultarDb('GET','scripts/consulta_articulo_edit.php?cadena='+entrada.value,div_respuesta);
	});


	var editarProducto = function(id_producto){


		
		consultarDb('GET', 'scripts/cargar_articulo_edit.php?id_producto='+id_producto,edit_prod);
		toggle(edit_prod);

	}
	var guardarEdicion = function(id){

		let e_id_producto = document.getElementById('id_producto');
		let e_descripcion = document.getElementById('descripcion');
		let e_talle = document.getElementById('talle');
		let e_color = document.getElementById('color');
		let e_obs = document.getElementById('obs');
		let e_cantidad = document.getElementById('cantidad');
		let e_variante = document.getElementById('variante');
		let e_precio = document.getElementById('precio');
		let e_estampa = document.getElementById('estampa');
		let e_combinacion = document.getElementById('combinacion');

		
	    actualizarProducto(e_id_producto.value,e_descripcion.value,e_talle.value,e_color.value,e_cantidad.value,e_obs.value,e_estampa.value,e_combinacion.value,e_precio.value);

	    toggle(edit_prod);


	
	}


	 var  actualizarProducto = function(id,descripcion=null,talle=null,color=null,cantidad=null,obs=null,estampa=null,combinacion=null,precio=null,variante=null){
		let conn = new XMLHttpRequest();
		conn.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				entrada.innerHTML = this.responseText;
			}
		}
		conn.open('GET','scripts/update_producto.php?id_producto='+id+'&variante='+variante+'&color='+color+'&talle='+talle+'&precio='+precio+'&obs='+obs+'&descripcion='+descripcion+'&estampa='+estampa+'&combinacion='+combinacion+'&cantidad='+cantidad,true);
		conn.send();
	}

	
		



	</script>
</body>