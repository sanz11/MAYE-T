<?php 
	@include"../modelo/Conectar.php";
    @include"modelo/Conectar.php";
	$clase=" ";
	$icono="";
	$mensaje="";
session_start();
	if(@$_GET["cerrar"]){
		session_unset('nombre');
		session_destroy();
	}
	
	if(@$_POST["ingresarin"]){
		@$cuenta=$_POST['usuario'];
		@$password=$_POST['contraseña'];
		if(!empty($cuenta)){
			if(!empty($password)){
                $md5pass=md5($password);
				$consulta=$mysqli->query("select * from trabajador where dni='$cuenta' and contrasenia='$md5pass'");
				if(mysqli_num_rows($consulta)){
					$arreglo=mysqli_fetch_array($consulta);
					$_SESSION["nombre"]=$arreglo["nombre"];
					$_SESSION["apellidos"]=$arreglo["apellidos"];
                    $_SESSION["email"]=$arreglo["email"];
                    $_SESSION["dni"]=$arreglo["dni"];
                    $_SESSION["contrasenia"]=$arreglo["contrasenia"];
					$_SESSION["foto"]=$arreglo["foto"];
                    
                    header('location:vista/men.php');
                    session_start();
					
				}else{
					$error[3]="Usuario o Contraseña incorrecta";
					$clase="alert alert-danger";
                    $cerrar="&times;";
					$mensaje="¡Oh no!";
				}
			}else{
				$error[2]="Ingrese la contraseña";
                $clase2="alert alert-danger";
                    $cerrar2="&times;";
			}
		}else{
			$error[1]="Ingrese el su DNI";
            $clase2="alert alert-danger";
                    $cerrar2="&times;";
		}
	}

    
	if(@$_POST["ingresar"]){
		@$cuenta=$_POST['usuario'];
		@$password=$_POST['contraseña'];
		if(!empty($cuenta)){
			if(!empty($password)){
                 $md5pass=md5($password);
				$consulta=$mysqli->query("select * from trabajador where dni='$cuenta' and contrasenia='$md5pass'");
				if(mysqli_num_rows($consulta)){
					$arreglo=mysqli_fetch_array($consulta);
					$_SESSION["nombre"]=$arreglo["nombre"];
					$_SESSION["apellidos"]=$arreglo["apellidos"];
                    $_SESSION["email"]=$arreglo["email"];
                    $_SESSION["dni"]=$arreglo["dni"];
                    $_SESSION["contrasenia"]=$arreglo["contrasenia"];
					$_SESSION["foto"]=$arreglo["foto"];
                    
                    header('location:men.php');
                           session_start();
					
				}else{
					$error[3]="Usuario o Contraseña incorrecta";
					$clase="alert alert-danger";
                    $cerrar="&times;";
					$mensaje="¡Oh no!";
				}
			}else{
				$error[2]="Ingrese la contraseña";
                $clase2="alert alert-danger";
                    $cerrar2="&times;";
			}
		}else{
			$error[1]="Ingrese el su DNI";
            $clase2="alert alert-danger";
                    $cerrar2="&times;";
		}
	}

	if(@$_POST['irregistrar']){
		header('location:registro.php');
	}
    if(@$_POST['irregistrarin']){
		header('location:vista/registro.php');
	}
	
?> 