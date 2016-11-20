<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");

$trabajador= new trabajador();

$correo = $_POST["correo"];
$pas = $_POST["password"];


$actualiza=$trabajador->recuperar_contraseña($correo,$pas);
if($actualiza){
	$mensajes = "El proceso de cambio de contraseña del correo ".$correo;
    echo "
    <html>
    	<head>
    		<title>Recuperar contraseña</title>
    		<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
    	 <link rel='stylesheet' href='../css/index.css'>
        <link rel='stylesheet' href='../css/menu.css'>
        <link rel='stylesheet' href='../css/recuperar-contra.css'>
  </head>
  <body>
  <header>
    <div class='contenedor'>
      <img src='../im/logo.png'  id='logo'/>
      
      <label class='icon-menu1' for='menu-bar'></label>
      <!--FIN MENU-->
        <nav class='menu'>
        </nav>
    </div>
  </header>
    	<div class='progress'>
  			<div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuenow='45' aria-valuemin='0' aria-valuemax='100' style='width: 100%'' >
    			<span class='sr-only'>100% Completo</span>
  			</div>
		</div>
		<div class='alert alert-success' role='alert'>".$mensajes." a sido exitosa. Haga 
		<a href='../index.php' class='alert-link'>clik aquí para iniciar!</a></div>
	</body>
	</html>";
}else{
	$mensajes = "No se pudo cambiar la contraseña de tu correo: ".$correo;
    echo "
     <html>
    	<head>
    		<title>Recuperar contraseña</title>
    		<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
    	  <link rel='stylesheet' href='../css/index.css'>
        <link rel='stylesheet' href='../css/menu.css'>
        <link rel='stylesheet' href='../css/recuperar-contra.css'>
      </head>
      <body>
        <header>
          <div class='contenedor'>
          <img src='../im/logo.png'  id='logo'/>
      
      <label class='icon-menu1' for='menu-bar'></label>
      <!--FIN MENU-->
        <nav class='menu'>
        </nav>
    </div>
  </header>
    	
		<div class='alert alert-danger' role='alert'>"
  			.$mensajes.
  			"<a href='../index.php' class='alert-link'>. Ir al inicio!</a>
		</div>
	</body>
	</html>
	";
}
?>