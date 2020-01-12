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
	<option class="opcion">Seleccione Articulo </option>
	<?php 
	$sql_categoria = "SELECT categoria FROM fs_categoria";

	$consulta_cat = $con->query($sql_categoria);
	foreach ($consulta_cat as $cat) {
		?>
         <option class="opcion" value="<?php echo $cat['categoria'];?> "><?php echo $cat['categoria'];?> </option>
	<?php
	}
	?>	

</select>
	<div class="subCategoria">
	<label for="subProducto">Modelo</label>
</div>
<select name="subProducto" id="selectModelo">
	<option class="opcion" value="">Seleccione Modelo </option>
      </select>



<hr>
<button id="todos_productos" onclick="pedirDatos()">Ver todos los productos</button>

<!--/*******************************************************-->
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
		<table id="data_recuperada">
			
		</table>
	</table> 
</div>

<!--******fin container************-->
</div>


<script>

		let infoPagina = document.getElementById('infoPagina');
		infoPagina.innerHTML = 'Consulta';
		let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Mensaje de la pagina consulta de stock \n No lleva password";

	//---consultas a la db-------
	
		var opciones = document.getElementById('selectModelo');
		var selectCategoria = document.getElementById('selectCategoria');
		selectCategoria.addEventListener("focusout", function(){
			cargarModelos();
		});
	    var data_recuperada = document.getElementById('data_recuperada');
		var conexion_js = new XMLHttpRequest();

	//----------- FUNCIONES --------------------

		//------CARGA EL TOTAL DE LOS ARTICULOS ---

		function pedirDatos(){		
			conexion_js.onreadystatechange = function(){
			if (this.readyState == 4 && this.status ==200) {
				data_recuperada.innerHTML = this.responseText;				
			}
		};
		conexion_js.open('GET','scripts/consulta_articulo.php',true);
		conexion_js.send();
	}

	
       //----LLENA EL SELECT DE MODELOS ----
       
	function cargarModelos(){
		conexion_js.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200) {
				opciones.innerHTML = this.responseText;
				
			}
		}
		conexion_js.open('GET','scripts/cargar_modelo.php?id_categoria=2',true);
		conexion_js.send();
	}


	



</script>	
</body>
