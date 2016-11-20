<!DOCTYPE html>
<html>
<head>

	<title>Recuperar Contraseña</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/menu.css">
  <link rel="stylesheet" href="../css/recuperar-contra.css">
  
  
	
</head>
<body>
  <header>
    <div class="contenedor">
      <img src="../im/logo.png"  id="logo"/>
      
      <label class="icon-menu1" for="menu-bar"></label>
      <!--FIN MENU-->
        <nav class="menu">
        </nav>
    </div>
</header>

	<div class="progress">
  		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 5%" >
    		<span class="sr-only">5% Completo</span>
  		</div>
	</div>
  
	<div class='panel panel-primary'>
        <div class='panel-body'>
          Recuperar contraseña
        </div>
        <div class='panel-footer'>
	         <form class="form form-horizontal " action="../controlador/verifica_correo.php" method="post" role='form' name='recuperar1'>
		        <div class="form-group">
    		      <label for="correo" class="col-sm-4 control-label">Ingrese su correo</label>
    		      <div class="col-xs-8">
      			   <input name="correo" type="text" class=" col-sm-12 form-control" id="correo" placeholder="ejemplo@gmail.com" required>
    		      </div>
  		      </div>
  		<div class="form-group">
    		<div class="botones col-sm-12">
      			<button type="submit" class="btn btn-success" >Recuperar</button>
      			<a class="btn btn-danger" role="button" data-toggle="collapse" href="../index.php" aria-expanded="false" aria-controls="collapseExample">
  				Cancelar
				</a>
    		</div>
  		</div>
	</form>
  </div>
  <script src='../js/recupera.js'></script>
  </div>
</body>
</html>
