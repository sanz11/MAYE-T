<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");

$trabajador= new trabajador();

@$rubro=$_GET['rubro'];
@$lugar=$_GET['lugar'];

if(empty($rubro)){
$rubro='mecanico';
$lugar='lima';
}

@$mensaje="FILTRANDO: ".$rubro."s, en ".$lugar;

$matriztrabajador=$trabajador->search_trabajador($rubro,$lugar);
if($matriztrabajador){
    $msmlista="valido";
}else{
    $msmlista="novalido";
    $mensajes="No se encontro ningun resultado";
}

?>