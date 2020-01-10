<?php
include('header.php');

?>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/index.css">
<body>
	
	<div class="container">

	<div class="menu_central">
		<a href="consulta.php"><div class="menu1 menu">
			<div class="boton">
				<p class="texto_boton">
					Consulta de stock producto.
				</p>
			</div>
		</div></a>
		<a href=""><div class="menu2 menu">
			<div class="boton">
				<p class="texto_boton">
					Orden de pedido.
				</p>
			</div>
		</div></a>
		<a href=""><div class="menu3 menu">
			<div class="boton">
				<p class="texto_boton">
					Alta/Baja de stock.
				</p>
			</div>
		</div></a>
		<a href="clientes.php"><div class="menu5 menu">
			<div class="boton">
				<p class="texto_boton">
					Registro de clientes.
				</p>
			</div>
		</div></a>
		<a href=""><div class="menu4 menu">
			<div class="boton">
				<p class="texto_boton">
					Panel de Administración.
				</p>
			</div>
		</div></a>
	</div>
	</div>
<?php
include('footer.php');
?>
<script>	
	let infoPagina = document.getElementById('infoPagina');
	infoPagina.innerHTML = 'Inicio';
	let infoGeneral = document.getElementById('infoGeneralText');
		infoGeneral.innerHTML = "Pagina de inicio. No hay mensajes";
</script>
</body>
</html>