<?php
include('header.php');
include('navegador.php');
include('global/conexion.php');
?>

<script src="js/scripts.js"></script>
<link rel="stylesheet" href="css/clientes.css">
<body>
	<div class="container">

		<!--////////SECCION CLIENTE INDIVIDUAL LISTAR-->

	<section class="buscar_cliente">
		<div id="buscar_cliente">
		<label for="">Buscar cliente:</label>
		
			<input type="text" name="cadena"><br>
			<button>Por Nombre</button>
			<button>Por Provincia</button>
			<button>Por Ciudad</button>
			<button>Todos los clientes</button>
			
		
		<hr>
		<table>
			<tr>
				<td>Nombre</td>
				<td>Direccion</td>
				<td>Ciudad</td>
				<td>Provincia</td>
				<td>Telefono</td>
				<td>Email</td>
				<td>C.P.</td>
				<td>Dni</td>
				<td>Rev.</td>
				<td>Desc.</td>

			</tr>

			<?php
			$buscar = '';
			
			$sql_consultar_cliente = "SELECT * FROM fs_clientes where nombre_completo like '%".$buscar."%'";

			if (!$consulta_cliente = $con->query($sql_consultar_cliente)) {
				echo "error".$consulta_cliente->error;
			}

			foreach ($consulta_cliente as $row) {
				?>
				<tr>
				<td class="datos"><?php echo $row['nombre_completo'];?></td>
				<td class="datos"><?php echo $row['direccion'];?></td>
				<td class="datos"><?php echo $row['ciudad'];?></td>
				<td class="datos"><?php echo $row['provincia'];?></td>
				<td class="datos"><?php echo $row['telefono'];?></td>
				<td class="datos"><?php echo $row['email'];?></td>
				<td class="datos"><?php echo $row['codigo_postal'];?></td>
				<td class="datos"><?php echo $row['dni'];?></td>
				<td class="datos"><?php if($row['revendedora']==1){
					echo 'Si';
				}else{
					echo 'No';
				}
				;?></td>
				<td class="datos"><?php echo $row['descuento'];?></td>
			</tr>
			<?php
			}
			?>
			
		</table>
		<br>
		<hr>
		<span><?php echo  'Cantidad de Registros coincidentes : '.$con->affected_rows;?></span>
		</div>
</section>
<hr>

<!--//////////////////// SECCION CLIENTE NUEVO REGISTRO-->

<section id="ingresar_cliente">
	<div class="boton">
	<button id="boton_cliente">Ingresar Nuevo Cliente</button>
</div>
	<div id="form_cliente">
	<form action="scripts/guardar_cliente.php" method="POST">

		<label for="nombre_completo">Nombre y Apellido</label>		
		<input type="text"  name="nombre_completo" maxlength="80" required>
		<span class="pista">Maximo 80 caracteres. Obligatorio.</span>

		<label for="direccion">Direccion</label>
		<input type="text" name="direccion" maxlength="200">
		<span class="pista"> Maximo 20 caracteres. Opcional.</span>

		<label for="ciudad">Ciudad</label>
		<input type="text" name="ciudad" maxlength="100">
		<span class="pista">Maximo 100 caracteres. Opcional.</span>

		<label for="provincia">Provincia</label>		
		<select name="provincia" id="">
			<option  name="provincia" value="">Seleccione Provincia</option>
			<option  name="provincia" value="Buenos Aires">Buenos Aires</option>
			<option  name="provincia" value="Catamarca">Catamarca</option>
			<option  name="provincia" value="Chaco">Chaco</option>
			<option  name="provincia" value="Chubut">Chubut</option>
			<option  name="provincia" value="Cordoba">Cordoba</option>
			<option  name="provincia" value="Corrientes">Corrientes</option>
			<option  name="provincia" value="Entre Rios">Entre Rios</option>
			<option  name="provincia" value="Formosa">Formosa</option>
			<option  name="provincia" value="Jujuy">Jujuy</option>
			<option  name="provincia" value="La Pampa">La Pampa</option>
			<option  name="provincia" value="La Rioja">La Rioja</option>
			<option  name="provincia" value="Mendoza">Mendoza</option>
			<option  name="provincia" value="Misiones">Misiones</option>
			<option name="provincia" value="Neuquen">Neuquen</option>
			<option name="provincia" value="Rio Negro">Rio Negro</option>
			<option name="provincia" value="Salta">Salta</option>
			<option name="provincia" value="San Juan">San Juan</option>
			<option name="provincia" value="San Luis">San Luis</option>
			<option name="provincia" value="Santa Cruz">Santa Cruz</option>
			<option name="provincia" value="Santa Fe">Santa Fe</option>
			<option name="provincia" value="Santiago del Estero">Santiago del Estero</option>
			<option name="provincia" value="Tierra del Fuego">Tierra del Fuego</option>
			<option name="provincia" value="Tucuman">Tucuman</option>
		</select>

		<label for="telefono">Telefono</label>
		<input type="number" name="telefono" value="0" maxlength="18">
		<span class="pista">Hasta 18 numeros Opcional</span>

		<label for="email">Email</label>
		<input type="text" name="email" maxlength="150">
		<span class="pista">Maximo 150 caracteres. Opcional</span>

		<label for="cod_postal">Codigo Postal</label>
		<input type="number" name="cod_postal" value="0" maxlength="6">
		<span class="pista">Hasta 6 numeros.Opcional</span>

		<label for="dni">Dni</label>
		<input type="number" name="dni" value="0" maxlength="9">
		<span class="pista">Hasta 9 numeros</span>

		<label for="revendedora">Es revendedor/a</label>
		<input type="radio" value="1" name="revendedora"><span id="texto">Si</span>
		<input type="radio" value="0" name="revendedora" checked><span id="texto">No</span><span class="pista">Opcional. Predeterminado: NO.</span>
		<label for="descuento" >Descuento (%)</label>
		<input type="number" name="descuento" value="0" maxlength="4">
		<span class="pista">Hasta 4 numeros. Opcional</span>

		<input type="submit" value="Guardar Registro">

	</form>
</div>
</section>
</div>


	<script>
		let infoPagina = document.getElementById('infoPagina');
	infoPagina.innerHTML = 'Clientes';
	let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Pagina de inicio. No hay mensajes";

	var form_cliente = document.getElementById('form_cliente');
	var boton_form_cliente = document.getElementById('boton_cliente');
	var buscar_cliente_div = document.getElementById('buscar_cliente');

	boton_form_cliente.addEventListener("click",function(){
		toggle(form_cliente);
		toggle(buscar_cliente_div);
		console.log(boton_form_cliente.value);
		if (boton_form_cliente.innerHTML == 'Ingresar Nuevo Cliente') {
			boton_form_cliente.innerHTML = 'Cancelar';
			boton_form_cliente.style.backgroundColor = "red";
			}else{
				boton_form_cliente.innerHTML = 'Ingresar Nuevo Cliente';
				boton_form_cliente.style.backgroundColor = "#800055";
			}
	});


	
	</script>
</body>