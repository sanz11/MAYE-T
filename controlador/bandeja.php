<?php
@include("../modelo/Conectar.php");
@include("../modelo/trabajador.php");

@include("modelo/Conectar.php");
@include("modelo/trabajador.php");
$bandeja= new trabajador();

@$ban=$_GET['band'];

if(@$ban==="1"){
    $bandeja->update_bandeja($_SESSION['dni']);
}

$numbandeja=$bandeja->num_bandeja($_SESSION['dni']);

?>