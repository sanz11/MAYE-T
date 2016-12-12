<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Buscar Trabajador</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/fontello.css">
	<link rel="stylesheet" href="../css/lista.css">
	<link rel="stylesheet" href="../css/email.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>	
<script src="../js/mensaje.js"></script>
</head>
<body>

 <?php include ('menu2.php');?>
 <?php include ('sugerencia.php');?>
 <?php include '../controlador/listartrabajador.php';?>
 <?php include '../controlador/sendemail.php';?>
 <br>
 <br>
 <br>
	 <div class="lista">
	  <div class="filtro">
	 	<div class="filtrar">
	 		<h1 class="titulo">Buscar Trabajador</h1>
	 		<form action="?" class="formu" method="get">
	 			<input type="text" name="rubro" id="quebuscas" placeholder="¿Qué buscas?" class="inputd">
	 			<br>
	 			<br>
	 			<SELECT name="lugar" class="select"> 
                     <OPTION VALUE="Amazonas">Amazonas</OPTION> 
                     <OPTION VALUE="Áncash">Áncash</OPTION> 
                     <OPTION VALUE="Apurímac">Apurímac</OPTION> 
                     <OPTION VALUE="Arequipa">Arequipa</OPTION> 
                     <OPTION VALUE="Ayacucho">Ayacucho</OPTION> 
                     <OPTION VALUE="Cajamarca">Cajamarca</OPTION>
                     <OPTION VALUE="Callao">Callao</OPTION> 
                     <OPTION VALUE="Cuzco">Cuzco</OPTION> 
                     <OPTION VALUE="Huancavelica">Huancavelica</OPTION>
                     <OPTION VALUE="Huánuco">Huánuco</OPTION>
                     <OPTION VALUE="Ica">Ica</OPTION> 
                     <OPTION VALUE="Junín">Junín</OPTION> 
                     <OPTION VALUE="La Libertad">La Libertad</OPTION>
                     <OPTION VALUE="Lambayeque">Lambayeque</OPTION> 
                     <OPTION VALUE="Lima">Lima</OPTION>
                     <OPTION VALUE="Loreto">Loreto</OPTION>
                     <OPTION VALUE="Madre de Dios">Madre de Dios</OPTION> 
                     <OPTION VALUE="Moquegua">Moquegua</OPTION> 
                     <OPTION VALUE="Pasco">Pasco</OPTION>
                     <OPTION VALUE="Piura">Piura</OPTION> 
                     <OPTION VALUE="Puno">Puno</OPTION> 
                     <OPTION VALUE="San Martin">San Martin</OPTION>
                     <OPTION VALUE="Tacna">Tacna</OPTION> 
                     <OPTION VALUE="Tumbes">Tumbes</OPTION> 
                     <OPTION VALUE="Ucayali">Ucayali</OPTION>
                      
               </SELECT>
               <br>
               <br>
               <input type="submit" value="Filtrar" id="submit" class= "inputd">
	 			
	 		</form>
	 		</div>
	 </div>
	 
	 <div class="section">
	 	 <?php
         echo @$mensaje;
          if($msmlista=="valido"){
          foreach($matriztrabajador as $registro){?>
	       <section class="secciones">
	 	    <H3><?php echo " ".$registro["oficio"];?></H3>
	 	    <div class="div">
	 	    	<img src="../fotosadmin/<?php echo $registro["foto"];?>"><br>
                <H5> experiencia: <?php echo $registro["experiencia"];?> años</H5>
	 	    </div>
	 	    <div class="div">
	 	    	<h5 class="nombre"><?php echo $registro["nombre"];?> <?php echo $registro["apellidos"];?></h5>
	 	    <h5><?php echo $registro["ciudad"];?></h5>
            <h5>Telefono: <?php echo $registro["telefono"];?></h5>
            <h5>Celular: <?php echo $registro["celular"];?></h5>
            <h5>Correo:" <?php echo $registro["email"];?></h5>
	 	    </div>
            <br>
	 			<section>
	 			
	 			<a href="perfilnew.php?dni=<?php echo $registro["dni"];?>" id="ver">Ver perfil</a>
                <a href="javascript:ver('<?php echo $registro["email"];?>','<?php echo $registro["nombre"];?>');"class="ver" id="ver">Enviar Email</a>
	 			<br>
	 			<br>
	 			
	 		</section>
	 	</section>
          <?php  }}
          else{
              echo "<section class='secciones'>
	 	    <div class='div'>
	 	    </div>
	 	    <div class='div'>
	 	    	<h5 class='nombre'>".@$mensajes."</h5>
	 	   
	 	    </div>
	 	</section>";
          }
          //echo $msn;
          ?>
          
	 </div>
	 	
	 </div>
	 
	 
	 <!------------------modalllll----------------------->
 <div class="modal fade" id="emailmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
  		
  			<h1>Enviar un mensaje</h1>
  			
  			<div class="modal-body">
<form action="?" method="post" class="cf">
  <div class="half left cf">
    <input type="text" name="nombrems" id="nombrems" placeholder="Nombre" readonly>
    <input type="email" name="emailms" id="emailms" placeholder="correo" readonly>
    <input type="text" name="asunto" id="asunto" placeholder="Asunto">
  </div>
  <div class="half right cf">
    <textarea name="mensajemsa" type="text" id="mensaje" placeholder="mensaje"></textarea>
  </div>  
  <input type="submit" value="Submit" name="enviarema" id="input-submit">
</form>
  				
  				
  			</div>
  		</div>
  		
  	</div>
  </div>
	 
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>	
<script src="../js/mensaje.js"></script>
</body>
</html>