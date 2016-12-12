<?php


@$a=addslashes($_GET['to']);
@$de=addslashes($_GET['for']);
@$l=addslashes($_GET['l']);
@$r=addslashes($_GET['r']);
@$name=addslashes($_GET['name']);

$contenido="Buenas Tardes." . '\r\n' ."Yo ".$name ." Por medio de la presente me dirijo a usted para expresarle mi deseo de postular a la oferta de empleo que se publico por el portal MAYEOFICIOS.";

$cabeceras = 'From: MayeOficios' . "\r\n" .
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