<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet"href="../css/registro.css">
	<link rel="stylesheet"href="../css/menu.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet"href="../css/login.css">
	<title>Formulario</title>
	</head>
<body>
 <?php include ('menu.php');?>
    <?php
	include '../controlador/registro.php';
	?>
	 <div class="formu">
	 	<form action="?" class="formregistro" method="post">
	 	     <br> 
             <br>
             <div class="aviso">
             <h4>Para tener privilegios de ofertante activa la casilla y llena tus datos</h4>
              <?php
				echo @$mensaje;
				?>
             </div>
	 		  <input type="checkbox" id="check" value="1" name="check" >
             <div class="separ">
             
	 		<h4>Nombre:</h4> 
	 		 <input type="text" id="nombre" name="nombre" placeholder="Nombre" required/>
	 		
	          <br>
             <br>
	 		  <h4>Apellidos:</h4>
	 		  <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
	 		  <br>
             <br>
	 		 <h4>Dni:</h4> 
	 		  <input type="number" id="dni" name="dni" placeholder="Dni" required>
	 		    <br>
                <br>
	 		   <h4>E-mail:</h4>
	 		  <input type="email" id="e-mail" name="email" placeholder="@gmail" required>
                <br>
               <br>
               <h4>Contraseña:</h4>
	 		  <input type="password" id="contraseña" name="contra" placeholder="Contraseña" required>
             
             <br>
             <br>
             <h4>Confirmar Contraseña:</h4>
	 		  <input type="password" id="confircontraseña" name="confircontraseña" placeholder="Confirmar Contraseña" required>
             <br>
             <br>
             
             <br>
             </div>      
             <div class="ofertante separ">
              <h4>Ciudad:</h4>
	 		  <input type="text" id="ciudad" name="ciudad" placeholder="Ciudada">
	 		  <br>
             <br>
	 		 <h4>Direccion:</h4> 
	 		  <input type="text" id="direccion" name="direccion" placeholder="Direccion" >
	 		  
	 		  <br>
             <br>
	 		   <h4>Telefono:</h4>
	 		  <input type="number" id="telefono" name="telefono" placeholder="Telefono" >
              
               <br>
               <br>
               <h4>Celular:</h4>
	 		  <input type="number" id="celular" name="celular" placeholder="celular" >
                                
               <br>
               <br>
               <h4>Nacimiento:</h4>
	 		   <SELECT NAME="dia" class="select" > 
                     <OPTION VALUE="1">1</OPTION> 
                     <OPTION VALUE="2">2</OPTION> 
                     <OPTION VALUE="3">3</OPTION> 
                     <OPTION VALUE="4">4</OPTION> 
                     <OPTION VALUE="5">5</OPTION> 
                     <OPTION VALUE="6">6</OPTION>
                     <OPTION VALUE="7">7</OPTION> 
                     <OPTION VALUE="8">8</OPTION> 
                     <OPTION VALUE="9">9</OPTION>
                     <OPTION VALUE="10">10</OPTION> 
                     <OPTION VALUE="11">11</OPTION> 
                     <OPTION VALUE="12">12</OPTION>
                     <OPTION VALUE="13">13</OPTION> 
                     <OPTION VALUE="14">14</OPTION>
                     <OPTION VALUE="15">15</OPTION>
                     <OPTION VALUE="16">16</OPTION> 
                     <OPTION VALUE="17">17</OPTION> 
                     <OPTION VALUE="18">18</OPTION>
                     <OPTION VALUE="19">19</OPTION> 
                     <OPTION VALUE="20">20</OPTION> 
                     <OPTION VALUE="21">21</OPTION>
                     <OPTION VALUE="22">22</OPTION> 
                     <OPTION VALUE="23">23</OPTION> 
                     <OPTION VALUE="24">24</OPTION>
                     <OPTION VALUE="25">25</OPTION> 
                     <OPTION VALUE="26">26</OPTION> 
                     <OPTION VALUE="27">27</OPTION>
                     <OPTION VALUE="28">28</OPTION> 
                     <OPTION VALUE="29">29</OPTION> 
                     <OPTION VALUE="30">30</OPTION>
                     <OPTION VALUE="31">31</OPTION>
               </SELECT>
               <SELECT NAME="mes" class="selectmes"> 
                     <OPTION VALUE="1">Enero</OPTION> 
                     <OPTION VALUE="2">Febrero</OPTION> 
                     <OPTION VALUE="3">Marzo</OPTION> 
                     <OPTION VALUE="4">Abril</OPTION> 
                     <OPTION VALUE="5">Mayo</OPTION> 
                     <OPTION VALUE="6">Junio</OPTION>
                     <OPTION VALUE="7">Julio</OPTION> 
                     <OPTION VALUE="8">Agosto</OPTION> 
                     <OPTION VALUE="9">Setiembre</OPTION>
                     <OPTION VALUE="10">Octubre</OPTION> 
                     <OPTION VALUE="11">Noviembre</OPTION> 
                     <OPTION VALUE="12">Diciembre</OPTION>
                     
               </SELECT>
	 		  <input type="number" id="anio" class="year"name="anio" placeholder="año" >
	       <br>
	 	       <br>
 	       </div>
	 	       
	 	     <div class="boton">
                 <input type="submit" class="registro" name="registro" value="registrar"/>
	 	     </div>
	 	
	 	</form>
	 	<br>
	 
	 </div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>