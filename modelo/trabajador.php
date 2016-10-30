<?php

 class trabajador{
	 
	public function set_trabajador($dni,$nombre,$apellidos,$email,$contrasenia,$ciudad,$direccion,$telefono,$celular,$oficio,$experiencia,$nacimiento){
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
        
		 $sql="insert into trabajador(dni,nombre,apellidos,email,contrasenia,ciudad,direccion,telefono,celular,oficio,experiencia,nacimiento) values(:dni,:nombre,:apellidos,:email,:contrasenia,:ciudad,:direccion,:telefono,:celular,:oficio,:experiencia,:nacimiento) ";
		 $statement=$conexion->prepare($sql);
		 $statement->bindParam(':dni',$dni);
           $statement->bindParam(':nombre',$nombre);
           $statement->bindParam(':apellidos',$apellidos);
           $statement->bindParam(':email',$email);
           $statement->bindParam(':contrasenia',$contrasenia);
           $statement->bindParam(':ciudad',$ciudad);
           $statement->bindParam(':direccion',$direccion);
           $statement->bindParam(':telefono',$telefono);
           $statement->bindParam(':celular',$celular);
            $statement->bindParam(':oficio',$oficio);
           $statement->bindParam(':experiencia',$experiencia);
           $statement->bindParam(':nacimiento',$nacimiento);
		  
		  if(!$statement){
			  return "error registrar";
		  }
		  else{
			 $statement->execute();
			  return "el usuario se registro correctamente";
              
		  }
		  
	 	}
	  
	 public function get_trabajador(){
		 
		 $trabajador = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from administrador");
		 $statement=$conexion->prepare($sql);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $admin[]=$filas;
		 
		 }
		 return $admin; 
	 	}
     public function buscarAdmin($dato,$defecha,$hastafecha){
		 
		 $admin = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from administrador where dni=:dni or apellidos=:apellidos or tipo_admin=:tipo or (fecha_ingreso >=:defecha AND
        fecha_ingreso <=:hastafecha)");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':dni',$dato);
           $statement->bindParam(':apellidos',$dato);
           $statement->bindParam(':tipo',$dato);
           $statement->bindParam(':defecha',$defecha);
           $statement->bindParam(':hastafecha',$hastafecha);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $admin[]=$filas;
		 
		 }
		 return $admin; 
	 	}
	 
     
	  public function Update_admin($dni,$email,$telefono,$foto){
		 
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		  
			    $consulta=(" update  administrador set correo=:email,nick=:telefono,foto=:foto where dni=:dni ");
			  	$statement=$conexion->prepare($consulta);
		 		$statement->bindParam(':email',$email);
                $statement->bindParam(':telefono',$telefono);
                $statement->bindParam(':foto',$foto);
                $statement->bindParam(':dni',$dni);     
		  
		  		if(!$statement){
			  		return "error al actualizar el registro";
					
		  		}else{
			   		$statement->execute();
			  		return "se actualizo el registro";
				}
		  
	 	}
	 public function existeAdmin($dni){
		 $admin = null;
		  $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		  
		 
		 $consulta1=(" select * from  administrador where dni=:dni ");
		 $statement1=$conexion->prepare($consulta1);
		 $statement1->bindParam(':dni',$dni);
		 $statement1->execute();
		  
		  while($filas=$statement1->fetch(PDO::FETCH_ASSOC)){
			 $admin[]=$filas;
			  
		 
		 }
		 return $admin; 
	 }
	   
     public function login($user,$pass){
		 
		 $admin = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from administrador where dni=:dni and password=:pass ");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':dni',$user);
         $statement->bindParam(':pass',$pass);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $admin[]=$filas;
		 
		 }
		 return $admin; 
	 	}
     
}
?>