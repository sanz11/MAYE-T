<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");
$trabajador= new trabajador();

$dni=$_GET['dni'];
$matriztrabajador=$trabajador->Exists_trabajador($dni);
$matrizoficios=$trabajador->get_oficios($dni);

?>