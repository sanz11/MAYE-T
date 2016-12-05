<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/publicarTrabaj.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/fontello.css">

<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
</head>
<body>
<?php include ('menu2.php');?>
<?php include ('sugerencia.php');?>
<?php include ('../controlador/publicartrabajo.php');?>

<div class="perfil">
   <div class="percon">
   <br>
   <h1 class="p">Publicar Trabajo</h1>
   <?php echo @$alerta;?>
    <form action="?" method="post">
    <fieldset class="form-group">
      <div class="form-check col-sm-6 col-xs-12">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="nombre" value="nombre" id="nom" checked>
            Usar Mi nombre para publicar
            <input type="text" name="realname" class="form-control" id="realname" value="<?php echo $_SESSION['nombre'];?>" readonly>
        </label>
      </div>
    <div class="form-check col-sm-6 col-xs-12">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" name="nombre" id="empresa" value="empresa" >
            Usar nombre de empresa
            <input type="text" class="form-control" name="nomempresa" id="nomempresa"placeholder="nombre de la empresa">
        </label>
    </div>
  </fieldset>
  <div class="form-group">
    <label for="rubro" id="otroru">Rubro</label>
    
    <input type="checkbox" id="checotro" name="otrorubro" value="checotro">
    <label for="checotro">Otro</label>
    
    <select class="form-control" id="rubro" name="rubro">
      <option>---</option>
      <option>Gasfitero</option>
      <option>Albañil</option>
      <option>Mecanico</option>
      <option>Plomero</option>
      <option>Chofer</option>
      <option>l</option>
    </select>
   
     <input type="text" class="form-control" name="otro" id="otro" placeholder="Escribe otro  rubro">
     <br>
     <label for="lugar" id="otroru">Lugar</label>
    <SELECT NAME="lugar" class="form-control"> 
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
   
    
  </div>
    <div class="form-group">
    <label for="descripcion">Descripción del trabajo</label>
    <textarea class="form-control" name="descripcion" rows="4"></textarea>
  </div>
   
  <input  type="submit" name="publicar" class="btn btn-primary" value="publicar">
  
</form>
   <br><br>
    </div>
</div>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>