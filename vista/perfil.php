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
   #lbt{
    cursor: pointer;
    margin-top: 15px;
    }
    
    #fo{
    background-image:url('../im/editfo.png');
    background-size: 100%;
    padding: 10px 20px;
    }
    #btnfoto{
        display:none;
    }
    #gurada{
       display:none;
    }
</style>
  
</head>
<body>
<?php include ('menu2.php');?>
<?php include ('../controlador/perfil.php');?>
<div class="perfil">
    <div class=" datos" >
       <?php if($dni==$_SESSION['dni']){
             if($valor=="1"){
          foreach($matriztrabajador as $registro){ ?>
        <div class=" red col-sm-5 col-xs-12" >
           <img src="../fotosadmin/<?php echo $registro["foto"];?>" class='fotperf'>
           
        </div>
        <div class="col-sm-7 col-xs-12 dat">
         
          <h1 style="text-align:center;" id="name"><?php echo $_SESSION['nombre']." ".$_SESSION['apellidos'];?></h1>
            <div id="dni">
            <h2><strong>Dni: </strong><?php echo $_SESSION['dni'];?></h2>
            <h2><strong>Email: </strong><?php echo $registro["email"];?></h2>
            <?php
                
	       echo "
            <h2><strong>Telefono:</strong>".$registro["telefono"]."</h2>
            <h2><strong>Ciudad: </strong>".$registro["ciudad"]."</h2>
            <h2><strong>Dirección: </strong>".$registro["direccion"]."</h2>
            <h2><strong>F.N:</strong>".$registro["nacimiento"]."</h2>
            </div>
        
        </div>
    </div>" ?>
    <div class="row">
      <div class="col-sm-7">     </div>
        <div class="col-sm-5 ">
            <div id="gurada" class="alert alert-warning"><strong>Por favor </strong>guarde los cambios</div>
           <a class="btn  btn-sm btn-info" id="e"data-toggle="modal" data-target="#edited" >Editar datos</a>
        </div>
    </div>
    <?php
    echo "<div class='col-sm-12' >
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
             <br>
              <A HREF='aniadirOficio.php'class="btn btn-primary"><STRONG>AÑADIR MAS<STRONG></A>
                <br><br><br>  
        </div>
    </div>
</div>

<!--MODAL-->
<div class="modal fade" id="edited" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
  			<center><h1>Editar Perfil</h1></center>
  			<?php echo @$mn;?>
  			
  			<div class="modal-body">
  				
  				<form action="../controlador/editar_perfil.php" method="post" enctype="multipart/form-data">
  				 <div class="row">
                   <div class="col-sm-2"></div>
                    <div class="col-sm-6">
                        <label for="btnfoto" id="lbt"><span id='fo'>  </span>¿cambiar foto?</label>
           <input type="file" accept="image/*" id="btnfoto" name="btnfoto" value="<?php echo $registro["foto"];?>">
           
                   <input name="fo" value="<?php echo $registro["foto"];?>" style="display:none;">
                  </div>
                    <div class="col-sm-4">
                         <img src="../fotosadmin/<?php echo $registro["foto"];?>" style="width:50px;">
                    </div>
                </div>
  				<div class="row">
                     <div class="col-sm-1"></div>
  				    <div class="col-md-5">
  				        <h4>Celular:</h4>
  					    <input type="number"  class="form-control" name="celular" value="<?php echo $registro["celular"];?>" required>
  				    </div>
  				    <div class="col-sm-5">
  				        <h4>Telefono:</h4>
  					<input type="number"  class="form-control" name="telefono" value="<?php echo $registro["telefono"];?>" required>
  				    </div>
  				</div>
  				<div class="row">
                     <div class="col-sm-1"></div>
  				    <div class="col-md-5">
  				        <h4>Ciudad:</h4>
  					    <input type="text"  class="form-control" name="ciudad" value="<?php echo $registro["ciudad"];?>" required>
  				    </div>
  				    <div class="col-sm-5">
  				        <h4>Direccion:</h4>
  					<input type="text"  class="form-control" name="direccion" value="<?php echo $registro["direccion"];?>" required>
  				    </div>
  				</div>
               
                 <div class="row">
                     <div class="col-sm-1"></div>
  				    <div class="col-md-10">
  				        <h4>Perfil:</h4>
  					    <textarea class="form-control" name="perfil" rows="6" required>
  					        <?php echo $registro["perfil"];?>
  					    </textarea>
  				    </div>
  				</div>
                 <br>
  		        <div class="row">
  		            <div class="col-sm-2"></div>
  		            <div class="col-sm-6">
  		            <input type="submit" class="btn btn-success" value="Guardar" name="guardar" id="o">
  					<input type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true" value="cancelar">
  		                
  		            </div>
  		        </div>
  					
  				
  		        </form>
  				
  			</div>
  		</div>
  		
  	</div>
  </div>


<script src="../js/jquery.js"></script>
<script src="../js/alert.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
  /* global $, swal, FileReader */

$('#e').on('click', function () {
  $('#gurada').css("display","block");
});
    
$('#o').on('click', function () {
  $('#gurada').css("display","none");
});
    

  
</script>
</body>
</html>