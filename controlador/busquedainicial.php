<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajador.php");
require_once("../modelo/trabajo.php");

$trabajador= new trabajador();
$trabajo= new trabajo();
$msbusqueda="";

@$rubro=$_POST['rubro'];
@$lugar=$_POST['lugar'];
@$tipodebusqueda=$_POST['tipodebusqueda'];

if($tipodebusqueda=="trabajador"){
$matriztrabajador=$trabajador->search_trabajador($rubro,$lugar);
$msbusqueda="RESULTADOS DE: ".$rubro.", en ".$lugar;
header('location:../vista/listar_trabajador.php');
}else{
$matriztrabajador=$trabajo->search_trabajo($rubro,$lugar);
$msbusqueda="RESULTADOS DE: ".$rubro.", en ".$lugar;
header('location:../vista/listar_trabajo.php');
}
?>