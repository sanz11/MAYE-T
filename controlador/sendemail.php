<?php

if(isset($_POST['enviarema'])){
$nombre=$_POST['nombrems'];
$email=$_POST['emailms'];
$asunto=$_POST['asunto'];
    
$nombredemi=$_SESSION['nombre'];
$contenido="Estes es un mensaje de  postulacion";

if (mail($a,"Mensaje de: ".$de,$contenido)) {

		//Si el mensaje se envía muestra una confirmación
		$enviomsn="<script> alert('Gracias, usted postulo correctamente.');</script>";
	}else{
    $enviomsn="<script> alert('Lo sentimos, usted no a podido postular.');</script>";
}
}
?>