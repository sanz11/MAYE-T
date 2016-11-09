<?php
@include("../modelo/Conectar.php");
@include("../modelo/trabajador.php");

@include("modelo/Conectar.php");
@include("modelo/trabajador.php");
$bandeja= new trabajador();

$numbandeja=$bandeja->num_bandeja($_SESSION['dni']);

?>