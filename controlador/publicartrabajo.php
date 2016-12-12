<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajo.php");
require_once('../modelo/date.php');
        
    $fecha= new fechahoy();
     $fe=$fecha->fechahoy();

$trabajo= new trabajo();

@$nombre=addslashes($_POST['realname']);

@$lugar=addslashes($_POST['lugar']);

@$raempresa=addslashes($_POST['nombre']);

@$nomempresa=addslashes($_POST['nomempresa']);
//options
@$rubro=addslashes($_POST['rubro']);
//radio de otro
@$otrorubro=addslashes($_POST['otrorubro']);
//caja de otro
@$otro=addslashes($_POST['otro'];
@$descripcion=addslashes($_POST['descripcion']);

if($raempresa==="empresa"){
    $nombre = $nomempresa;
}
if($otrorubro){
   $rubro= $otro;
}
if(@$_POST['publicar']){
    
    if(empty($nombre) || empty($rubro)|| empty($descripcion)||$rubro==="---" ){
        $alerta="<script>alert ('llene todos los datos');</script>";
    }else{
	$alerta=$trabajo->set_trabajo($nombre,$rubro,$descripcion,$lugar,$fe,$_SESSION['email']);
    }

}
?>