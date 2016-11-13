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
     <?php include '../controlador/listartrabajo.php';?>

	
	 <div class="lista">
	 <div class="filtro">
	 	<div class="filtrar">
	 		<h1 class="titulo">Buscar Trabajo</h1>
	 		<form action="?" class="formu" method="get">
	 			<input type="text" name="rubro" id="quebuscas" placeholder="¿Que buscas?">
	 			<br>
	 			<br>
	 			<SELECT NAME="lugar" class="select"> 
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
	 
	 
	 <div class='section'>
	   <?php
         echo @$mensaje;
         echo @$enviomsn;
          if($msmlista=="valido"){
          foreach($matriztrabajo as $registro){
	       echo "<section class='secciones'>
	 	    <H3>".$registro["nombre"]."</H3>
            <input type='text' value=' ".$registro["email"]."' name='emailms' style='display:none;'>
	 	    <div class='div'>
	 	    <h4>".$registro["rubro"]."</h4>
				<h5 class='nombre'>".$registro["descripcion"]."</h5>
         <h5 class='nombre'>publicado el: ".$registro["fecha"]."</h5>
	 	    </div>
            <br>
	 	    <section>
	 			<a href='../controlador/postular.php?to=".$registro["email"]."&for=".$_SESSION["email"]."' id='ver'>Postular</a>
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