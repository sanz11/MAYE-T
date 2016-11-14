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
@$check=$_POST['check'];


$mensaje="";
$existe="";


	if(@$_POST['registro']){
		
	 if($check==="1"){
		 if(empty($ciudad)||empty($direccion)||empty($dia)||empty($mes)||empty($anio)){
			 $mensaje="<script> alert(' No puede dejar uno o mas estos campos vacios: ciudad, direccion y fecha de nacimiento ');</script>";
		 }else{
			$nacimiento=$anio."-".$mes."-".$dia;
			$existe=$trabajo->Existe_trabajador($dni,$email);
		if(!$existe){
	 		$foto="fotostrabaja/admin.jpg";
            $perfil="contenido";
	 		$bandeja=0;
     		if($contra===$contra2){
	   			$mensaje=$trabajo->set_trabajador($dni,$nombre,$apellidos,$email,$contra,$ciudad,$direccion,$telefono,$celular,$nacimiento,$foto,$bandeja,$perfil);

     		}else{
        	$mensaje="<script> alert('Las contraseñas no coinciden');</script>";
     		}
		}else{
			$mensaje="<script> alert(' DNI ó EMAIL ya existen ');</script>";
		}
			
		}
		 
	 }else{
         $perfil="contenido";
         $ciudad="vacio";
         $direccion="vacio";
         $telefono="vacio";
         $celular="vacio";
         $nacimiento="1-1-1";
			$existe=$trabajo->Existe_trabajador($dni,$email);
		if(!$existe){
	 		$foto="fotostrabaja/admin.jpg";
	 		$bandeja=0;
     		if($contra===$contra2){
	   			$mensaje=$trabajo->set_trabajador($dni,$nombre,$apellidos,$email,$contra,$ciudad,$direccion,$telefono,$celular,$nacimiento,$foto,$bandeja,$perfil);

     		}else{
        	$mensaje="<script> alert('Las contraseñas no coinciden');</script>";
     		}
		}else{
			$mensaje="<script> alert(' DNI ó EMAIL ya existen ');</script>";
		}
     }
		
	
		
}
 

?>
