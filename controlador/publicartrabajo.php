<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajo.php");
require_once('../modelo/date.php');
        
    $fecha= new fechahoy();
     $fe=$fecha->fechahoy();

$trabajo= new trabajo();

@$nombre=$_POST['realname'];

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