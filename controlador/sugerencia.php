<?php 

$trabajador = new trabajador();

if(isset($_POST['envsuger'])){
    
$nombr=$_POST['nombresuge'];
$mensaj=$_POST['comentariosuge'];
    
    $resultado=$trabajador->set_sugerencia($nombr,$mensaj);
	header('location: ?lugar='.$l.'&rubro='.$r.'');
}
?>