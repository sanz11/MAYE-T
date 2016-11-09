<?php include('../controlador/login.php');?>

<header>
		<div class="contenedor">
			<a href="../index.php"><img src="../im/logo.png"  id="logo"/></a>
			
			<input type="checkbox" id="menu-bar"/>
			<label class="icon-menu1" for="menu-bar"></label>
				<nav class="menu">
				<a class="btn  btn-xs" data-toggle="modal" data-target="#miventanalogin" >Entrar</a>
				<a href="registrar.php" class="btn  btn-xs">Registrar</a>
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
  					<input type="submit" class="btn entrar" value="Entrar" name="ingresar">
  					<input type="submit" class="btn registrar "  name="irregistrar" value="Registrar">
  					<br>
  					<br>
  					<a href="">Olvidé mi contraseña</a>
  					</form>
  				</div>
  			</div>
  		</div>
  		
  	</div>
  </div>