<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>MayeOficios</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/fontello.css">
	<link rel="stylesheet" href="../css/lista.css">
	<link rel="stylesheet" href="../css/login.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
</head>
<body>

 <?php include ('menu2.php');?>
 <?php include '../controlador/listartrabajador.php';?>
	 <div class="lista">
	  <div class="filtro">
	 	<div class="filtrar">
	 		<h1 class="titulo">Buscar Trabajador</h1>
	 		<form action="?" class="formu" method="get">
	 			<input type="text" name="rubro" id="quebuscas" placeholder="ej: mecanico">
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
               <input type="submit" value="Filtrar" id="submit">
	 			
	 		</form>
	 		</div>
	 </div>
	 
	 <div class="section">
	 	 <?php
         echo @$mensaje;
          if($msmlista=="valido"){
          foreach($matriztrabajador as $registro){
	       echo "<section class='secciones'>
	 	    <H3>. ".$registro["oficio"]."</H3>
	 	    <div class='div'>
	 	    	<img src='".$registro["foto"]."'><br>
                <H5> experiencia: ".$registro["experiencia"]." años</H5>
	 	    </div>
	 	    <div class='div'>
	 	    	<h5 class='nombre'>".$registro["nombre"]." ".$registro["apellidos"]."</h5>
	 	    <h5>".$registro["ciudad"]."</h5>
	 	    <h5>".$registro["direccion"]."</h5>
            <h5>Telefono: -".$registro["telefono"]."</h5>
            <h5>Celular: -".$registro["celular"]."</h5>
            <h5>Correo:".$registro["email"]."</h5>
	 	    </div>
            <br>
	 			<section>
	 			
	 			<a href='perfilnew.php?dni=".$registro["dni"]."' id='ver'>Ver perfil</a>
                <a href='#' id='ver'>Ver portafolio</a>
                <a href='#' id='ver'>Enviar Email</a>
	 			<br>
	 			<br>
	 			
	 		</section>
	 	</section>";
            }}
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
	 <script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>	
</body>
</html>