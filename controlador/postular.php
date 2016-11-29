<?php


@$a=$_GET['to'];
@$de=$_GET['for'];
@$l=$_GET['l'];
@$r=$_GET['r'];
$contenido="Estes es un mensaje de  postulacion";

$cabeceras = 'From: postulacion@MayeOficios.com' . "\r\n" .
    'Reply-To: abelricrasanchez@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();


if (mail($a,"Mensaje de: ".$de."",$contenido,$cabeceras)) {

		//Si el mensaje se envía muestra una confirmación
    
		$enviomsn="1";
header('location: ../vista/listar_trabajo_log.php?m='.$enviomsn.'&lugar='.$l.'&rubro='.$r.'');
	}else{
     
    $enviomsn="2";
header('location: ../vista/listar_trabajo_log.php?m='.$enviomsn.'&lugar='.$l.'&rubro='.$r.'');
}

?>