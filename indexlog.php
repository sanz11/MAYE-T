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
<link rel="stylesheet" href="css/login.css">

<!--fonts--->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
</head>
<body>
<video src="video/f2.mp4" autoplay loop  poster="im/fondo.jpg"></video><!--muted-->
<?php include('controlador/login.php');?>

<header>
		<div class="contenedor">
			<!--<img src="im/logo.png"  id="logo"/>-->
			
			<input type="checkbox" id="menu-bar"/>
			<label class="icon-menu1" for="menu-bar"></label>
			<!--FIN MENU-->
				<nav class="menu">
				<a class="btn  btn-xs" data-toggle="modal" data-target="#miventanalogin" >Entrar</a>
				<a href="vista/registrar.php" class="btn  btn-xs">Registrar</a>
				</nav>
		</div>
</header>
<!--MENSAJE DE ERROR-->
                  
                  <div class="msje <?php echo @$clase;?>">
                    <button type="button" class="close" data-dismiss="alert"><?php echo @$cerrar;?></button>
                   <strong><?php echo @$mensaje;?> </strong> <?php echo @$error[3];?></div>
                               
                    <div class="msje <?php echo @$clase2;?>">
                    <button type="button" class="close" data-dismiss="alert"><?php echo @$cerrar2;?></button>
                   <?php echo @$error[1];?>
                    <?php echo @$error[2];?></div>
                                
                  <!--MENSAJE DE ERROR--> 	

  	
  	<div class="modal fade" id="miventanalogin" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
  			<h1>Iniciar Sesión</h1>
  			
  			<div class="modal-body">
  				<div class="login">
  				<form action="?" method="post" class="formulog">
  				
  					<h4>Usuario</h4>
  					<input type="text"  class="form-control log" name="usuario" id="usuario" placeholder="DNI">
  					<h4>Contraseña</h4>
  					<input type="password"  class="form-control log" name="contraseña" id="contraseña" placeholder="Contraseña">
  					  <br>
  					<input type="submit" class="btn entrar" value="Entrar" name="ingresarin">
  					<input type="submit" class="btn registrar "  name="irregistrarin" value="Registrar">
  					<br>
  					<br>
  					<a href="">Olvidé mi contraseña</a>
  					</form>
  				</div>
  			</div>
  		</div>
  		
  	</div>
  </div>
  <!--FIN MENU-->

<div class="container-fluid">
		<div class="main row cont">
			<div class="contgra">
				<img src="im/logo.png" id="logo">
				<br>
				<div class="col-sm-12 formu">
				
				<!--FORMULARIO-->
				
<form action="controlador/busquedainicial.php" method="post">
	<div class="form-group">
		<input name="rubro" type="text"  class="input" placeholder="¿Qué buscas?" required>
	</div>
	
	<div class="form-group">
		<input name="lugar" type="text" class="input"  placeholder="¿Distrito / Provincia? ¿Departamento?" required>
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
		
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
</body>
</html>