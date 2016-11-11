<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajo.php");
$trabajo= new trabajo();


@$a=$_GET['to'];
@$de=$_GET['for'];
$contenido="Estes es un mensaje de  postulacion";

if (mail($a,"Mensaje de: ".$de,$contenido)) {

		//Si el mensaje se envía muestra una confirmación
		$enviomsn="<script> alert('Gracias, usted postulo correctamente.');</script>";
	}else{
    $enviomsn="<script> alert('Lo sentimos, usted no a podido postular.');</script>";
}

?>