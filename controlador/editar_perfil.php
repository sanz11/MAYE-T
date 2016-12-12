<?php 

include("../modelo/Conectar.php");
include("../modelo/trabajador.php");

$trabajador= new trabajador();

session_start();
	  if(isset($_SESSION['nombre'])){

if(@$_POST["guardar"]){
    $telefono = addslashes($_POST['telefono']);
     $fo = addslashes($_POST['fo']);
    $ciudad = addslashes($_POST['ciudad']);
    $celular = addslashes($_POST['celular']);
    $direccion = addslashes($_POST['direccion']);
    $perfil = addslashes($_POST['perfil']);
    
    $foto=$_FILES["btnfoto"]["name"];
$ruta=$_FILES["btnfoto"]["tmp_name"];
$destino="../fotosadmin/".$foto;
    
    if($destino=="../fotosadmin/"){
       $mn=$trabajador->Update_trabajador($_SESSION['dni'],$ciudad,$direccion,$telefono,$celular,$fo,$perfil);
        
} else{
        
       $mn=$trabajador->Update_trabajador($_SESSION['dni'],$ciudad,$direccion,$telefono,$celular,$foto,$perfil);
        $trabajador->Update_foto($_SESSION['dni'],$foto);
    copy($ruta,$destino);
        
    } } 

header('location: ../vista/perfil.php?dni='.$_SESSION["dni"].'');
      
    }

else{
    header('location: ../indexlog.php');
}
?>