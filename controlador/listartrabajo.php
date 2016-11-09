<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajo.php");
$trabajo= new trabajo();



@$rubro=$_GET['rubro'];
@$lugar=$_GET['lugar'];

if(empty($rubro)){
$rubro='mecanico';
$lugar='lima';
}

@$mensaje="FILTRANDO: ".$rubro.", en ".$lugar;

    $matriztrabajo=$trabajo->search_trabajo($rubro,$lugar);
if($matriztrabajo){
    $msmlista="valido";
}else{
    $msmlista="novalido";
    $mensajes="No se encontro ningun resultado";
}
?>