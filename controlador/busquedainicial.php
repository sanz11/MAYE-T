<?php

$msbusqueda="";

@$rubro=$_POST['rubro'];
@$lugar=$_POST['lugar'];
@$tipodebusqueda=$_POST['tipodebusqueda'];
@$msbusqueda="RESULTADOS DE: ".$rubro.", en ".$lugar;

if($tipodebusqueda=="trabajador"){
    header('location:../vista/listar_trabajador.php?rubro='.$rubro.'&lugar='.$lugar.'&mensaje='.$msbusqueda);
}else{
    $matriztrabajador=$trabajo->search_trabajo($rubro,$lugar);
    header('location:../vista/listar_trabajo.php?rubro='.$rubro.'&lugar='.$lugar.'&mensaje='.$msbusqueda);
}
?>