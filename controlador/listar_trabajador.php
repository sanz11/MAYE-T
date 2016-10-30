<?php
require_once("../modelo/Conectar.php");
require_once("../modelo/trabajo.php");

$admin= new admin();
$msbusqueda="";

@$dato=$_POST['dato'];
@$defecha=$_POST['defecha'];
@$hastafecha=$_POST['hastafecha'];

if(@$_POST["buscar"]){

$matrizAdmin=$admin->buscarAdmin($dato,$defecha,$hastafecha);
$msbusqueda="RESULTADOS DE: ".$dato.", fecha: desde ".$defecha." hasta ".$hastafecha."";
}else if(@$_POST["todo"]){
    $matrizAdmin=$admin->listarAdmin();
    $msbusqueda="SE ESTA MOSTRANDO LA LISTA COMPLETA";
}else{
    $matrizAdmin=$admin->listarAdmin();
    $msbusqueda="SE ESTA MOSTRANDO LA LISTA COMPLETA";
}

if($matrizAdmin){
    $msmlista="valido";
}else{
    $msmlista="novalido";
    $msbusqueda="";
}

?>