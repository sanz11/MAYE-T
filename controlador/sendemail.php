<?php

if(isset($_POST['enviarema'])){
$nombre=$_POST['nombrems'];
$email=$_POST['emailms'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
    
$nombredemi=$_SESSION['nombre'];
$contenido="Este es un mensaje desde MAYEOFICIOS.com <br> ";
$contenido=$contenido . $mensaje;

if (mail($email,$asunto." /Mensaje de: ".$nombredemi,$contenido)) {

		//Si el mensaje se envía muestra una confirmación
		$enviomsn="<script> alert('Bien!!, su mensaje se envio correctamente.');</script>";
	}else{
    $enviomsn="<script> alert('Lo sentimos, usted no a podido postular.');</script>";
}
}
?>