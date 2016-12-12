<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");

$trabajo= new trabajador();



@$nombre=addslashes($_POST['nombre']);
@$apellidos=addslashes($_POST['apellidos']);
@$dni=addslashes($_POST['dni']);
@$email=addslashes($_POST['email']);
@$contra=addslashes($_POST['contra']);
@$contra2=addslashes($_POST['confircontraseña']);
@$ciudad=addslashes($_POST['ciudad']);
@$direccion=addslashes($_POST['direccion']);
@$telefono=addslashes($_POST['telefono']);
@$celular=addslashes($_POST['celular']);
@$dia=addslashes($_POST['dia']);
@$mes=addslashes($_POST['mes']);
@$anio=addslashes($_POST['anio']);
@$check=addslashes($_POST['check']);


$mensaje="";
$existe="";


	if(@$_POST['registro']){
		
	 if($check==="1"){
		 if(empty($direccion)||empty($dia)||empty($mes)||empty($anio)){
			 $mensaje="<script> alert(' No puede dejar uno o mas estos campos vacios: ciudad, direccion y fecha de nacimiento ');</script>";
		 }else{
			$nacimiento=$anio."-".$mes."-".$dia;
			$existe=$trabajo->Existe_trabajador($dni,$email);
		if(!$existe){
	 		$foto="admin.jpg";
            $perfil="Falta añadir datos en el perfil";
	 		$bandeja=0;
     		if($contra===$contra2){
                $md5pass=md5($contra);
	   			$mensaje=$trabajo->set_trabajador($dni,$nombre,$apellidos,$email,$md5pass,$ciudad,$direccion,$telefono,$celular,$nacimiento,$foto,$bandeja,$perfil);

     		}else{
        	$mensaje="<script> alert('Las contraseñas no coinciden');</script>";
     		}
		}else{
			$mensaje="<script> alert(' DNI ó EMAIL ya existen ');</script>";
		}
			
		}
		 
	 }else{
         $perfil="contenido";
         $direccion="no a añadido aun su dirección";
         $telefono="000 00";
         $celular="000 000 000";
         $nacimiento="1-1-1";
			$existe=$trabajo->Existe_trabajador($dni,$email);
		if(!$existe){
	 		$foto="admin.jpg";
             $perfil="si deseas puedes añadir tu perfil";
	 		$bandeja=0;
     		if($contra===$contra2){
                 $md5pass=md5($contra);
	   			$mensaje=$trabajo->set_trabajador($dni,$nombre,$apellidos,$email,$md5pass,$ciudad,$direccion,$telefono,$celular,$nacimiento,$foto,$bandeja,$perfil);

     		}else{
        	$mensaje="<script> alert('Las contraseñas no coinciden');</script>";
     		}
		}else{
			$mensaje="<script> alert(' DNI ó EMAIL ya existen ');</script>";
		}
     }
}
 

?>
