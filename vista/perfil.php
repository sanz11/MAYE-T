<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" href="../css/fontello.css">
<link rel="stylesheet" href="../css/perfil2.css">
<link rel="stylesheet" href="../css/alert.css">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">

<style type="text/css">
   .input-type-file{
    cursor: pointer;
    margin-top: 15px;
    }
    
    #fo{
    background-image:url('../im/editfo.png');
    background-size: 100%;
    padding: 10px 20px;
    }
    
</style>
  
</head>
<body>
<?php include ('menu2.php');?>
<?php include ('../controlador/perfil.php');?>
<div class="perfil">
    <div class=" datos" >
       
        <div class=" red col-sm-5 col-xs-12" >
           <img src="../fotosadmin/<?php echo $_SESSION['foto'];?>" class='fotperf'>
           <p class="input-type-file"><span id='fo'>  </span>¿cambiar foto?</p>
        </div>
        <div class="col-sm-7 col-xs-12 dat">
          <h1 style="text-align:center;" id="name"><?php echo $_SESSION['nombre']." ".$_SESSION['apellidos'];?></h1>
            <div id="dni"> <input type="submit" value="Guardar cambios">
            <h2><strong>Dni: </strong><?php echo $_SESSION['dni'];?></h2>
            <h2><strong>Email: </strong><?php echo $_SESSION['email'];?></h2>
            <?php
                if($dni==$_SESSION['dni']){
             if($valor=="1"){
          foreach($matriztrabajador as $registro){
	       echo "
            <h2><strong>Ciudad: </strong>".$registro["ciudad"]."</h2>
            <h2><strong>Dirección: </strong>".$registro["direccion"]."</h2>
            <h2><strong>F.N:</strong>".$registro["nacimiento"]."</h2>
            </div>
        
        </div>
    </div>
    <div class='col-sm-12' >
        <div class='col-sm-7 col-xs-12'>
              <h1 id='perfil'>PERFIL</h1>
           <h2 id='descrip'>".$registro["perfil"]."</h2>
        </div>";}?>
        
       
         <div class="col-sm-5 col-xs-12">
              <h1 id="ofi">MIS OFICIOS</h1>
               <?php
    if($val=="1"){
          foreach($matrizoficios as $regis){
              $valor=$regis["experiencia"];
              if($valor>=10){
                   $valo="100%";
              }else{
                  $valo=$valor*10;
              }
                $color="#880E4F";
              if($valor<8){$color="#C2185B";}if($valor<6){$color="#D81B60";}
              if($valor<4){$color="#E91E63";}if($valor<2){$color="#F06292";}
              if($valor<1){$color="#F8BBD0";}
            
	       echo " <h1 class='nameoficio'>".$regis["oficio"]." <span style='font-size:12px;color:#E91E63;'>".$valor." años</span></h1>
           <div class='total'  style='border:0.5px solid #E91E63;'>
               <div class='avanexperiencia' style='background:".$color."; width:".$valo."%;'> 
                   <div class='puntos'>".$regis["experiencia"]." </div>
              </div>
           </div>
            ";}
    }else{
                echo "<div class='alert alert-success'>USTED <STRONG>NO </STRONG>TIENE OFICIOS AÑADIDOS, SI DESEA AÑADIR HAS <A HREF='  aniadirOficio.php'<STRONG>CLIC AQUI<STRONG></A></div>";
            }}
             else{
                 header('location:../indexlog.php');
             }}else{
                    echo "<div class='alert alert-warning'> Algunos datos ocultos</div>";
                }
            ?>
                <br><br><br>  
        </div>
    </div>
</div>


<script src="../js/jquery.js"></script>
<script src="../js/alert.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
  /* global $, swal, FileReader */
  

  $('.input-type-file').on('click', function () {
    swal({
      title: 'Select image',
      input: 'file',
      inputAttributes: {
        accept: 'image/*',
        name:'newfoto', 
          id:'newfoto'
      }
    }).then(function (file) {
      var reader = new FileReader()
      reader.onload = function (e) {
        swal({
          imageUrl: e.target.result
        }).catch(swal.noop)
      }
      reader.readAsDataURL(file)
    }).catch(swal.noop)
  });
    
    

  
</script>
</body>
</html>