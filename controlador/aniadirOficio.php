<?php
 	
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");

$trabajador= new trabajador();

@$oficio=addslashes($_POST['oficio']);
@$experiencia=addslashes($_POST['experiencia']);
$dni=$_SESSION['dni'];

$datos=$trabajador->get_trabajador($dni);
foreach($datos as $aniadir){
	       $nombre=$aniadir["nombre"];
		   $apellidos=$aniadir["apellidos"];
	       $email=$aniadir["email"];
	       $ciudad=$aniadir["ciudad"];
	       $direccion=$aniadir["direccion"];
	       $telefono=$aniadir["telefono"];
	       $celular=$aniadir["celular"];
	       $foto=$aniadir["foto"];
            }

if(@$_POST['aniadir']){
	$resultado=$trabajador->set_oficio($dni,$nombre,$apellidos,$email,$oficio,$ciudad,$direccion,$telefono,$celular,$foto,$experiencia);
	
	if($resultado){
		$mensaje="<script> alert('Se Añadio correctamente');</script>";
	}else{
		$mensaje="<script> alert('No se pudo Anñadir su oficio');</script>";
	}
	

}

$matriz=$trabajador->get_oficios($dni);

if($matriz){
	$matrizoficios=$matriz;
	$va ="1";
	}else{
	$va ="2";
}

	 

?>