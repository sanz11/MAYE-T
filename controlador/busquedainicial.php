<?php

$msbusqueda="";

@$rubro=$_POST['rubro'];
@$lugar=$_POST['lugar'];
@$tipodebusqueda=$_POST['tipodebusqueda'];

if($tipodebusqueda=="trabajador"){
    header('location:../vista/listar_trabajador.php?rubro='.$rubro.'&lugar='.$lugar);
}else{
    header('location:../vista/listar_trabajo.php?rubro='.$rubro.'&lugar='.$lugar);
}
?>