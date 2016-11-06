 <?php
session_start();
	  if(isset($_SESSION['nombre'])){
?>
<header>
		<div class="contenedor">
			<!--<img src="im/logo.png"  id="logo"/>-->
			
			<input type="checkbox" id="menu-bar"/>
			<label class="icon-menu1" for="menu-bar"></label>
			<!--FIN MENU-->
				<nav class="menu">
				 <?php echo '<img src="'.$_SESSION['foto'].'">';?>
				<h3 class="btn  btn-xs" data-toggle="modal" data-target="#cerrarsession"><?php echo $_SESSION['nombre']." ";?><span class="glyphicon glyphicon-cog" ></span></h3>
				</nav>
		</div>
</header>


<div class="modal fade " id="cerrarsession" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
  			<center><h1 style="color:#2E9AFE;">¿QUÉ DESEA HACER?</h1> </center>
  			  			
  		<div class="modal-body" style="background:#CED8F6;">
          <center> <span class="edit glyphicon glyphicon-cog" ><a href="perfil.php">Ir Perfil</a> </span>
            

            <a href="../index.php?cerrar=session"  title="Editar Perfil">
                <span class="glyphicon glyphicon-log-out"title="Cerrar Session">CerrarSessión</span>
            </a> 
            </center> 
   
     <center id="cancelar"><button type="button" class="btn btn-info" class="close" data-dismiss="modal" aria-hidden="true">Cancelar</button></center>
  					<br>
  					<br>
  			</div>
  		</div>
  		
  	</div>
  </div>
<?php		  
	  }else{
		  echo "Acceso denegado";
          header('location:../index.php');
	  }
	  ?>