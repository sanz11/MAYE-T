<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>MayeOficios</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/fontello.css">

<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
</head>
<body>
<video src="video/f2.mp4" autoplay loop  poster="im/fondo.jpg"></video><!--muted-->
<header>
		<div class="contenedor">
			<!--<img src="im/logo.png"  id="logo"/>-->
			<input type="checkbox" id="menu-bar"/>
			<label class="icon-menu1" for="menu-bar"></label>
				<nav class="menu">
				<a href="" class="btn btn-login btn-xs">Entrar</a>
				<a href="" class="btn btn-register btn-xs">Registrar</a>
				</nav>		
		</div>
</header>

<div class="container-fluid">
		<div class="main row cont">
			<div class="contgra">
				<img src="im/logo.png" id="logo">
				<br>
				<div class="col-sm-12 formu">
				
				<!--FORMULARIO-->
				
<form action="controlador/busquedainicial.php" method="post">
	<div class="form-group">
		<input name="rubro" type="text"  class="input" placeholder="¿Qué buscas?" >
	</div>
	
	<div class="form-group">
		<input name="lugar" type="text" class="input"  placeholder="¿Distrito / Provincia? ¿Departamento?" >
	</div>
	<div class="form-group">
	<input type="submit"class="btnbuscar">
	</div>
	<div class="radio">
	    <input type="radio" value="trabajo" class="rado" name="tipodebusqueda" checked><h5 id="tra1">Buscar Trabajo</h5>
	    <input type="radio" value="trabajador" class="rado"name="tipodebusqueda"><h5 id="tra2">Buscar Trabajador</h5>
	</div>
	
</form><br>
			<!--FINFORMULARIO-->
			
				</div>
			</div>
		</div>
</body>
</html>