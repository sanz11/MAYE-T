<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/añadirOficio.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/fontello.css">

<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
</head>
<body>
<?php include ('menu2.php');?>
<?php include ('sugerencia.php');?>
<?php include ('../controlador/aniadirOficio.php');?>

<?php 
	echo @$mensaje;?>
<h1 id="titulo">Añadir Oficio</h1>
<div class="perfil">
   <div class="percon">
    <div class="oficio div">
        <form action="?" id="ofi" class="form"method="post">
            <h4>Oficios</h4>
            <input type="text" name="oficio" class="input"id="oficio" placeholder="Oficio" required>
            <h4 class="h4">Experiencia(años)</h4>
            <input class="input" type="number" name="experiencia" id="experiencia" placeholder="Experiencia" required>
            <br>
            <br>
            <input  class="input" type="submit" value="Guardar" name="aniadir" class="guardar btn ">
            <br>
            <br>
        </form>
    </div>
    <div class="datos div">
      <div class=" t table-responsive" > 
      
      
      <table class="table table-striped table-bordered table-condensed">
       <tr class="info">
           <th>Oficio</th>
           <th>Experiencia(años)</th>
           <th>Opciones</th> 
           </tr>
           <?php
		 if($va=='1'){
		   foreach($matrizoficios as $aniadirDa){
       echo " <tr>
           <td>".$aniadirDa["oficio"]."</td>
           <td>".$aniadirDa["experiencia"]."</td>
           <td><a name='elimin' class='btn btn-danger' href='../controlador/eliminarOficio.php?oficio=".$aniadirDa["oficio"]."'><span class='glyphicon glyphicon-trash'></span></a></td>
        </tr>";
		   }
			 }else{
			echo " <tr>
           <td>no tienes oficios</td>
          
        </tr>"; 
		 }
       ?>
        </table>
			
        </div> 
        <br>
    </div>
    </div>
</div>

<!------------------------------------>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
