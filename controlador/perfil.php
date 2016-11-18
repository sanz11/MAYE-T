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

$matrizo=$trabajador->get_oficios($dni);
if($matrizo){
    $matrizoficios=$matrizo;
    $val="1";
}else{
    $val="2";
}

?>