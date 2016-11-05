<?php

$msbusqueda="";

@$rubro=$_POST['rubro'];
@$lugar=$_POST['lugar'];
@$tipodebusqueda=$_POST['tipodebusqueda'];

if(@$_POST['buscarsinlog']){
		if($tipodebusqueda=="trabajador"){
            header('location:../vista/listar_trabajador.php?rubro='.$rubro.'&lugar='.$lugar);
        }else{
            header('location:../vista/listar_trabajo.php?rubro='.$rubro.'&lugar='.$lugar);
        }
}

if(@$_POST['buscarlog']){
		if($tipodebusqueda=="trabajador"){
            header('location:../vista/listar_trabajador_log.php?rubro='.$rubro.'&lugar='.$lugar);
        }else{
            header('location:../vista/listar_trabajo_log.php?rubro='.$rubro.'&lugar='.$lugar);
        }
}


?>