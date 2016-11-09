<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet"href="../css/registro.css">
	<link rel="stylesheet"href="../css/menu.css">
    <link rel="stylesheet" href="../css/fontello.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Formulario</title>
	</head>
<body>
 <?php
    include ('menu.php');
    ?>
	 <div class="formu">
	 	<form action="" class="formregistro">
	 	     <br>
             <br>
             <div class="aviso">
             <h4>Para tener privilegios de ofertante activa la casilla y llena tus datos</h4>
             </div>
	 		  <input type="checkbox" id="check" >
             <div class="separ">
             
	 		<h4>Nombre:</h4> 
	 		 <input type="text" id="nombre" name="nombre" placeholder="Nombre"/>
	 		
	          <br>
             <br>
	 		  <h4>Apellidos:</h4>
	 		  <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
	 		  <br>
             <br>
	 		 <h4>Dni:</h4> 
	 		  <input type="number" id="dni" name="dni" placeholder="Dni">
	 		    <br>
                <br>
	 		   <h4>E-mail:</h4>
	 		  <input type="text" id="e-mail" name="email" placeholder="E-mail">
                <br>
               <br>
               <h4>Contraseña:</h4>
	 		  <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
             
             <br>
             <br>
             <h4>Confirmar Contraseña:</h4>
	 		  <input type="password" id="confircontraseña" name="confircontraseña" placeholder="Confirmar Contraseña">
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
	 		  <input type="text" id="direccion" name="direccion" placeholder="Direccion">
	 		  
	 		  <br>
             <br>
	 		   <h4>Telefono:</h4>
	 		  <input type="number" id="telefono" name="telefono" placeholder="Telefono">
              
               <br>
               <br>
               <h4>Celular:</h4>
	 		  <input type="number" id="celular" name="celular" placeholder="celular">
                                
               <br>
               <br>
               <h4>Nacimiento:</h4>
	 		   <SELECT NAME="dia" class="select"> 
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
                     <OPTION VALUE="enero">Enero</OPTION> 
                     <OPTION VALUE="febrero">Febrero</OPTION> 
                     <OPTION VALUE="marzo">Marzo</OPTION> 
                     <OPTION VALUE="abril">Abril</OPTION> 
                     <OPTION VALUE="mayo">Mayo</OPTION> 
                     <OPTION VALUE="junio">Junio</OPTION>
                     <OPTION VALUE="julio">Julio</OPTION> 
                     <OPTION VALUE="agosto">Agosto</OPTION> 
                     <OPTION VALUE="setiembre">Setiembre</OPTION>
                     <OPTION VALUE="octubre">Octubre</OPTION> 
                     <OPTION VALUE="noviembre">Noviembre</OPTION> 
                     <OPTION VALUE="diciembre">Diciembre</OPTION>
                     
               </SELECT>
	 		  <input type="number" id="anio" class="year"name="año" placeholder="año">
	       <br>
	 	       <br>
 	       </div>
	 	       
	 	     <div class="boton">
                 <botton type="submit" class="registro">Registrar</botton>
	 	     </div>
	 	
	 	</form>
	 	<br>
	 
	 </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>