<?php
session_start();
	  if(isset($_SESSION['nombre'])){
     require_once("../modelo/Conectar.php");
     require_once("../modelo/trabajador.php");
     @$oficio=$_GET['oficio'];
     @$dni=$_SESSION['dni'];

$trabajador= new trabajador();

 $oficio=$trabajador->eliminar_oficio($_SESSION['dni'],$oficio);
	  }else{
		  header('location:../index.php');
	  }
?>