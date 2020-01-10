<?php
include('header.php');
include('navegador.php');
include('global/conexion.php')
?>

<script src="js/scripts.js"></script>
<link rel="stylesheet" href="css/clientes.css">
<body>
	<div class="container">

		<!--////////SECCION CLIENTE INDIVIDUAL LISTAR-->

	<section class="buscar_cliente">
		<div id="buscar_cliente">
		<label for="">Buscar cliente:</label>
		<form action="">
			<input type="text"><br>
			<button>Por Nombre</button>
			<button>Por Provincia</button>
			<button>Por Ciudad</button>
			<button>Todos los clientes</button>
			
		</form>
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
			<tr>
				<td class="datos">juana molina</td>
				<td class="datos">Jacinta pichimahudi 22</td>
				<td class="datos">cordoba</td>
				<td class="datos">cordoba</td>
				<td class="datos">2569-8994</td>
				<td class="datos">loo_locoparecida@gmail.com</td>
				<td class="datos">1407</td>
				<td class="datos">26448998</td>
				<td class="datos">si</td>
				<td class="datos">15</td>
			</tr>
		</table>
		</div>
</section>
<hr>

<!--//////////////////// SECCION CLIENTE NUEVO REGISTRO-->

<section id="ingresar_cliente">
	<div class="boton">
	<button id="boton_cliente">Ingresar Nuevo Cliente</button>
</div>
	<div id="form_cliente">
	<form action="">
		<input type="text">
		<input type="text">
		<input type="text">
		<input type="text">
		<input type="text">
		<input type="text">
		<input type="text">
		<input type="text">
		<input type="text">
		<input type="text">

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