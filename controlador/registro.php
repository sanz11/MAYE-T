<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");

$trabajo= new trabajador();

@$nombre=$_POST['nombre'];
@$apellidos=$_POST['apellidos'];
@$dni=$_POST['dni'];
@$email=$_POST['email'];
@$contra=$_POST['contra'];
@$contra2=$_POST['confircontraseña'];
@$ciudad=$_POST['ciudad'];
@$direccion=$_POST['direccion'];
@$telefono=$_POST['telefono'];
@$celular=$_POST['celular'];
@$dia=$_POST['dia'];
@$mes=$_POST['mes'];
@$anio=$_POST['anio'];

$nacimiento=$anio."-".$mes."-".$dia;
//2012-2-2
//215-$mes-11
$mensaje="";

 if(@$_POST['registro']){
	 $foto="fotostrabaja/admin.jpg";
	 $bandeja=0;
     if($contra===$contra2){
	   $mensaje=$trabajo->set_trabajador($dni,$nombre,$apellidos,$email,$contra,$ciudad,$direccion,$telefono,$celular,$nacimiento,$foto,$bandeja);

     }else{
        $mensaje="<script> alert('Las contraseñas no coinciden');</script>";
     }
}

?>
