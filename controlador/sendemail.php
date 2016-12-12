<?php

if(isset($_POST['enviarema'])){
$nombre=addslashes($_POST['nombrems']);
$email=addslashes($_POST['emailms']);
$asunto=addslashes($_POST['asunto']);
$mensajemsa=addslashes($_POST['mensajemsa']);
    
$nombredemi=$_SESSION['nombre'];
$contenido="Este es un mensaje desde MAYEOFICIOS.pe.hu \r\n";
$contenido=$contenido . $mensajemsa;

    $cabeceras = 'From: MayeOficios' . "\r\n" .
    'Reply-To: abelricrasanchez@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if (mail($email,$asunto." /Mensaje de: ".$nombredemi." ",$contenido,$cabeceras)) {

		//Si el mensaje se envía muestra una confirmación
		$enviomsn="<script> alert('Bien!!, su mensaje se envio correctamente.');</script>";
	}else{
    $enviomsn="<script> alert('Lo sentimos, usted no a podido postular.');</script>";
}
}
?>