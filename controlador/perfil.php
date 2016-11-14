<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");
$trabajador= new trabajador();

@$dni=$_GET['dni'];
$matriz=$trabajador->Exists_trabajador($dni);
if($matriz){
    $matriztrabajador=$matriz;
    $valor="1";
}else{
    $valor="2";
}
$matrizoficios=$trabajador->get_oficios($dni);

?>