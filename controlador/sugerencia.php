<?php 

$trabajador = new trabajador();

if(isset($_POST['envsuger'])){
    
$nombr=addslashes($_POST['nombresuge']);
$mensaj=addslashes($_POST['comentariosuge']);
    
    $resultado=$trabajador->set_sugerencia($nombr,$mensaj);
	header('location: ?lugar='.$l.'&rubro='.$r.'');
}
?>