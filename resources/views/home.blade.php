<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/StyleH.css') }}">
</head>
<body>
	<div class="barra_navegacion">
		<nav class="nav">
			<div class="logo">
				<p><img src="../imagenes/logo.jpg" class="imagen_logo"></p>
			</div>
			<div class="navegacion_menu">
				<ul>
					<li><a href="{{ url('/inicio_s') }}" class="link" active>INICIO DE SECCION</a></li>
					<li><a href="{{ url('/register') }}" class="link">REGISTRESE</a></li>
					<li><a href="{{ url('/nosotro')}}" class="link">DE NOSOTROS</a></li>
					<li><a href="{{ url('/contacto')}}" class="link">CONTACTO</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="div_zapatos">
		<div class="contenido_zapatos">
			<p class="titulo_zapatos">ZAPATOS</p>
			<img src="../imagenes/casa.jpg" class="imagen_zapatos">
			<p><button type="submit" class="ver_zapatos" onclick="redireccion_5()">IR!</button></p>
		</div>
	</div>
	<div class="div_ropaniños">
		<div class="contenido_niños">
			<p class="titulo_niños">NIÑOS</p>
			<img src="../imagenes/casa.jpg" class="imagen_niños">
			<p><button type="submit" class="ver_niños" onclick="redireccion_4()">IR!</button></p>
		</div>
	</div>
	<div class="div_ropaadultos">
		<div class="contenido_adultos">
			<p class="titulo_adultos">ADULTOS</p>
			<img src="../imagenes/casa.jpg" class="imagen_adultos">
			<p><button type="submit" class="ver_adultos" onclick="redireccion_3()">IR!</button></p>
		</div>
	</div>
	<div class="div_accesorios">
		<div class="contenido_accsesorios">
			<p class="titulo_accesorios">ACCESORIOS</p>
			<img src="../imagenes/casa.jpg" class="imagen_accesorios">
			<p><button type="submit" class="ver_accsesorios" onclick="redireccion_2()">IR!</button></p>
		</div>
	</div>
	<div class="div_conjuntos">
		<div class="contenido_conjuntos">
			<p class="titulo_conjuntos">CONJUNTOS</p>
			<img src="../imagenes/casa.jpg" class="imagen_conjuntos">
			<p><button type="submit" class="ver_conjuntos" onclick="redireccion_1()">IR!</button></p>
		</div>
	</div>
</body>
<script>
	function redireccion_1 () {
		window.location.href = "{{ url('/conjuntos') }}";
	}
	function redireccion_2 () {
		window.location.href = "{{ url('/accesorios') }}";
	}
	function redireccion_3 () {
		window.location.href = "{{ url('/adultos') }}";
	}
	function redireccion_4 () {
		window.location.href = "{{ url('/niños') }}";
	}
	function redireccion_5 () {
		window.location.href = "{{ url('/zapatos') }}";
	}
</script>
</html>