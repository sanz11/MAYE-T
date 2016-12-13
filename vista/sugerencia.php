<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/sugerencia.css">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<?php @include ('../controlador/sugerencia.php');?>
<?php @include ('controlador/sugerencia.php');
    echo @$resultado;
    ?>
<div class="sugeren">
<div class="suge"><i class=" fa fa-envelope fa-2x"></i></div>
<div class="totalsuge">
<div class="totasuge">
 <BR></BR>
  <h1 id="titulosuge">QUEJAS O SUGERENCIAS </h1>
   <div class="wrapper">
   <br><br>
    <form method="post" action="?" class="formsuge">
    <div class="grupo">
        <span class="ico"><i class="fa fa-user fa-2x"></i></span>
        <select name="nombresuge" class="forminputsuge" >
            <option value="<?php echo $_SESSION['nombre']?>"><?php echo $_SESSION['nombre']?></option>
            <option value="Anónimo">Anónimo</option>
        </select>
       
    </div>
    
    <div class="grupo">
        <span class="ico"><i class="fa fa-comment fa-2x"></i></span>
        <textarea class="forminputsuge" name="comentariosuge" rows="8" placeholder="Comentario" required></textarea>
    </div>
    <div class="grupo">
        <input class="btnsuge" type="submit" name="envsuger" value="Enviar">
    </div>
    <br>
    </form>
</div>
</div>
</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>