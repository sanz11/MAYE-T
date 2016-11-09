<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajo.php");
require_once('../modelo/date.php');
        
    $fecha= new fechahoy();
     $fe=$fecha->fechahoy();

$trabajo= new trabajo();

$nombre="";

@$lugar=$_POST['lugar'];

@$raempresa=$_POST['nombre'];

@$nomempresa=$_POST['nomempresa'];
//options
@$rubro=$_POST['rubro'];
//radio de otro
@$otrorubro=$_POST['otrorubro'];
//caja de otro
@$otro=$_POST['otro'];
@$descripcion=$_POST['descripcion'];

if($raempresa="empresa"){
    $nombre = $nomempresa;
}
if($otrorubro){
   $rubro= $otro;
}

if(@$_POST['publicar']){
	$alerta=$trabajo->set_trabajo($nombre,$rubro,$descripcion,$lugar,$fe);
}


?>