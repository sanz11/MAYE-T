<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/perfil.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/fontello.css">

<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
</head>
<body >
 <?php include ('menu2.php');?>
<?php include ('../controlador/perfil.php');?>
<div class="perfil">
   <div class="percon">
    <div class="img div"><img src="<?php echo $_SESSION['foto'];?>"></div>
    <div class="datos div">
      <br>   
      <table>
       <tr>
           <td colspan="2"><h1><?php echo $_SESSION['nombre'];?></h1></td> 
           </tr>
        <tr>
        <td id="tamaño"><strong>DNI</strong></td><td><h4><?php echo $_SESSION['dni'];?></h4></td>
        
        </tr>
        <tr>
           <td><strong>Email:</strong></td><td><H4><?php echo $_SESSION['email'];?></H4></td>
        </tr>
        <?php
          if($dni== $_SESSION['dni']){
          foreach($matriztrabajador as $registro){
	       echo "
	 	    
        <tr>
                <td><strong>Ciudad</strong></td><td><H4>".$registro["ciudad"]."</H4></td>
            </tr>
        <tr>
                <td><strong>Dirección</strong></td><td><H4>".$registro["direccion"]."</H4></td>
            </tr>
        <tr>
                <td><strong>Teléfono</strong></td><td><H4>".$registro["telefono"]."</H4></td>
            </tr>
        <tr>
                <td><strong>Celular</strong></td><td><H4>".$registro["celular"]."</H4></td>
            </tr>
        <tr>
                <td><strong>F.N</strong></td><td><H4>".$registro["nacimiento"]."</H4></td>
            </tr>
        <tr>
            <td><strong>OFICIOS</strong></td>
            <td>
                <ul>";}?>
         <?php
          foreach($matrizoficios as $regis){
	       echo "
                    <li>".$regis["oficio"]."</li>";}?>
         <?php
	       echo "
                </ul>
            </td>
        </tr>";
          }else{
              echo "
              <tr>
                <td colspan='2'><strong>Error.</strong> Algunos Datos están ocultos</H4></td>
            </tr>";
          }
          ?>
        <tr>
          <td><button class="btn btn-info" data-toggle="modal" data-target="#miventana">Editar Perfil</button></td>
        </tr>
        </table>
        <br>
    </div>
    </div>
</div>

<div class="modal fade" id="miventana" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
  			<h1>EDITAR PERFIL</h1>
  			  			
  			<div class="modal-body">
                     <div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>¡Cuidado!</strong> solo debe editar los datos necesarios, y <strong>no es obligatorio</strong> que edite todo.
</div>
  					<form role="form">
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <label for="apellidos">Apellidos:</label>
    <input type="text" class="form-control" id="apellidos">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="region">Región:</label>
    <input type="text" class="form-control" id="region">
  </div>
  <div class="form-group">
    <label for="provincia">Provincia:</label>
    <input type="text" class="form-control" id="provincia">
  </div>
  <div class="form-group">
    <label for="direccion">Dirección:</label>
    <input type="text" class="form-control" id="direccion">
  </div>
  <div class="form-group">
    <label for="telefono">Teléfono:</label>
    <input type="text" class="form-control" id="telefono">
  </div>
  <div class="form-group">
    <label for="celular">Celular:</label>
    <input type="text" class="form-control" id="celular">
  </div>
  <div class="form-group">
    <label for="ejemplo_archivo_1">Editar foto de perfil</label>
    <input type="file" id="ejemplo_archivo_1">
    <p class="help-block">280px X 280px</p>
  </div>
  <div class="form-group">
      <div class="alert alert-warning"><h4> Ingrese su contraseña para <strong>comprobar </strong> que es usted el que esta realizando los cambios.</h4></div> <br>
    <label for="contraseña">Contraseña:</label>
    <input type="text" class="form-control" id="contraseña">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <button type="submit" class="btn btn-info">Cancelar</button>
</form>
  					<br>
  					<br>
  			</div>
  		</div>
  		
  	</div>
  </div>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>