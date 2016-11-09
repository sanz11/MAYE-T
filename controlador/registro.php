<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");


@$nombre=$_POST['nombre'];
@$apellidos=$_POST['apellidos'];
@$dni=$_POST['dni'];
@$email=$_POST['email'];
@$contraseña=$_POST['contraseña'];
@$contraseña2=$_POST['confirconttraseña'];
@$ciudad=$_POST['ciudad'];
@$direccion=$_POST['direccion'];
@$telefono=$_POST['telefono'];
@celular=$_POST['celular'];
@$=$_POST['contraseña'];
@$contraseña2=$_POST['confirconttraseña'];
$mensaje="";

 if(@$_POST['hhfa']){
     if($conta1===$conta12){
	   $mensaje=$trabajo->set_trabajo($nombres,$rubro,$descripcion,$lugar,$fe);

     }else{
        $mensaje="las contraseñas no conisifden";
     }
}

?>