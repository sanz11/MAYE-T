 <?php
session_start();
	  if(isset($_SESSION['nombre'])){

    include('../controlador/bandeja.php');     
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<header>
		<div class="contenedor">
			<a href="../indexlog.php"><img src="../im/logo.png"  id="logo"/></a>
			
			<input type="checkbox" id="menu-bar"/>
			<label class="icon-menu1" for="menu-bar"></label>
			<!--FIN MENU-->
				<nav class="menu">
				<a href="listar_trabajador_log.php"><img src="../im/ico-bstra.png" title="Buscar Trabajador" style="width:30px"><span class="letramenu"> Buscar Trabajador</span></a>
				<a href="listar_trabajo_log.php"><img src="../im/ico-bu.png" title="Buscar Trabajo" style="width:30px"><span class="letramenu"> Buscar Trabajo </span></a>
				<a href="publicar_trabajo.php"><img src="../im/ico-brtr.png" title="Publicar Trabajo" style="width:30px"><span class="letramenu"> Publicar Trabajo</span></a>
				<a href="aniadirOficio.php"><img src="../im/ico-list.png" title="Añadir Oficio" style="width:30px"><span class="letramenu"> Añadir Oficio</span></a>
				<a id="ben"><span style="background:#FF4000;padding:7px 5px;border-radius:50%;cursor:pointer;"><span class="glyphicon glyphicon-comment"></span><span style="padding:2px 3px;"><?php foreach($numbandeja as $countbandeja){
        echo $countbandeja["cont_mensaje"];}?></span></span></a>
				<a id="fotodeperfil">
				 <?php echo '<img class="photoperfil" src="../fotosadmin/'.$_SESSION['foto'].'">';?></a>
				<a class=" btn-xs" data-toggle="modal" data-target="#cerrarsession"><?php echo $_SESSION['nombre'];?><span class="glyphicon glyphicon-cog" ></span></a>
				</nav>
		</div>
</header>


<div class="modal fade " id="cerrarsession" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
  			<center><h1 style="color:#2E9AFE;">¿QUÉ DESEA HACER?</h1> </center>
  			  			
  		<div class="modal-body" style="background:#CED8F6;">
          <center> <span class="edit glyphicon glyphicon-cog" ><a href="perfil.php?dni=<?php echo $_SESSION['dni'];?>">Ir Perfil</a> </span>
            

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
  
  <div class="bandeja">
     <div class="flecha"></div>
      <h5><span class="glyphicon glyphicon-alert"></span>Usted tiene <?php foreach($numbandeja as $countbandeja){
        echo $countbandeja["cont_mensaje"];}?> notificaciones, Por favor revise su correo</h5>
  </div>
  
  <script >
        $(document).ready(function(){
   /**Aparecer y desaparecer lista cambiar**/ 
            var i =0;
           
        $("#ben").click(function(){
            if(i==0){
                $(".bandeja").slideDown(); i=1;
            }else{
                $(".bandeja").slideUp(); i=0;
            }
     
        });
        });
</script>
<?php		  
	  }else{
		  echo "Acceso denegado";
          header('location:../index.php');
	  }
	  ?>