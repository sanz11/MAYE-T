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
<h1 id="titulo">Añadir Oficio</h1>
<div class="perfil">
   <div class="percon">
    <div class="oficio div">
        <form action="" id="ofi">
            <h4>Oficios</h4>
            <input type="text" name="oficio" id="oficio" placeholder="Oficio">
            <h4>Experiencia(años)</h4>
            <input type="text" name="experiencia" id="experiencia" placeholder="Experiencia">
            <br>
            <br>
            <input type="submit" value="Guardar" class="guardar btn ">
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
        <tr>
           <td>Plomero</td>
           <td>4</td>
           <td><button class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
        </tr>
       
         <tr>
           <td>Gasfitero</td>
           <td>5</td>
           <td><button class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
        </tr>
         
         <tr>
           <td>Mecanico</td>
           <td>4</td>
           <td><button class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></button><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button></td>
        </tr>
        </table>
        </div> 
        <br>
    </div>
    </div>
</div>

<!------------------------------------>



<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>