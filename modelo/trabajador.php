<?php

 class trabajador{
	 
	public function set_trabajador($dni,$nombre,$apellidos,$email,$contrasenia,$ciudad,$direccion,$telefono,$celular,$nacimiento,$foto,$bandeja){
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
        
		 $sql="insert into trabajador(dni,nombre,apellidos,email,contrasenia,ciudad,direccion,telefono,celular,nacimiento,foto,cont_mensaje) values(:dni,:nombre,:apellidos,:email,:contrasenia,:ciudad,:direccion,:telefono,:celular,:nacimiento,:foto,:cont) ";
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
           $statement->bindParam(':nacimiento',$nacimiento);
           $statement->bindParam(':foto',$foto);
           $statement->bindParam(':cont',$bandeja);
		  
		  if(!$statement){
			  return "error registrar";
		  }
		  else{
			 $statement->execute();
			  return '<SCRIPT>alert ("SE REGISTRO CORRECTAMENTE :D");</SCRIPT>';
              
		  }
		  
	 	}
	  
	 public function get_trabajador($dni){
		 
		 $trabajador = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from trabajador where dni=:dni");
		 $statement=$conexion->prepare($sql);
		 $statement->bindParam(':dni',$dni);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $trabajador[]=$filas;
		 
		 }
		 return $trabajador; 
	 	}
     public function search_trabajador($rubro,$lugar){
		 
		 $trabajador = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from oficios where oficio=:oficio and ciudad=:lugar");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':oficio',$rubro);
        $statement->bindParam(':lugar',$lugar);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $trabajador[]=$filas;
		 
		 }
		 return $trabajador; 
	 	}
	 
     
	  public function Update_trabajador($dni,$email,$contrasenia,$ciudad,$direccion,$telefono,$celular,$foto){
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
        
		 $sql="update  trabajador set email=:email,contrasenia=:contrasenia,ciudad=:ciudad,direccion=:direccion,telefono=:telefono,celular=:celular,foto=:foto where dni=:dni ";
		 $statement=$conexion->prepare($sql);
		 $statement->bindParam(':dni',$dni);
           $statement->bindParam(':email',$email);
           $statement->bindParam(':contrasenia',$contrasenia);
           $statement->bindParam(':ciudad',$ciudad);
           $statement->bindParam(':direccion',$direccion);
           $statement->bindParam(':telefono',$telefono);
           $statement->bindParam(':celular',$celular);
            $statement->bindParam(':foto',$foto);
		  
		  if(!$statement){
			  return "error al actualizar";
		  }
		  else{
			 $statement->execute();
			  return "Sus datos se actualizaron correctamente";
              
		  }
		  
	 	}
	 public function Exists_trabajador($dnil){
		 $trabajador = null;
         $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		  
		 
		 $consulta1=(" select * from  trabajador where dni=:dni  ");
		 $statement1=$conexion->prepare($consulta1);
		 $statement1->bindParam(':dni',$dni);
		 $statement1->execute();
		  
		  while($filas=$statement1->fetch(PDO::FETCH_ASSOC)){
			 $trabajador[]=$filas;
			  
		 
		 }
		 return $trabajador; 
	 }
	 
	  public function Existe_trabajador($dni,$email){
		 $trabajador = null;
         $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		  
		 
		 $consulta1=(" select * from  trabajador where dni=:dni || email=:email ");
		 $statement1=$conexion->prepare($consulta1);
		 $statement1->bindParam(':dni',$dni);
		 $statement1->bindParam(':email',$email);
		 $statement1->execute();
		  
		  while($filas=$statement1->fetch(PDO::FETCH_ASSOC)){
			 $trabajador[]=$filas;
			  
		 
		 }
		 return $trabajador; 
	 }
	 
	 
	   
     public function login_trabajador($user,$pass){
		 
		 $trabajador = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from trabajador where dni=:dni and password=:pass ");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':dni',$user);
         $statement->bindParam(':pass',$pass);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $trabajador[]=$filas;
		 
		 }
		 return $trabajador; 
	 	}
     
     public function eliminar_trabajador($id){
		 
		 $trabajador = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("delete from trabajador where dni=:id");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':id',$id);

		 
		 if(!$statement){
			  return "error no se pudo eliminar";
		  }
		  else{
              $statement->execute();
			  return "se elimino correctamente";
              
		  }
	 	}
     
     public function get_oficios($dni){
		 
		 $trabajador = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from oficios where dni=:dni");
		 $statement=$conexion->prepare($sql);
          $statement->bindParam(':dni',$dni);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $trabajador[]=$filas;
		 
		 }
		 return $trabajador; 
	 	} 
     public function num_bandeja($dni){
		 
		 $bandeja = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select cont_mensaje from trabajador where dni=:dni");
		 $statement=$conexion->prepare($sql);
          $statement->bindParam(':dni',$dni);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $bandeja[]=$filas;
		 
		 }
		 return $bandeja; 
	 	}
	 
	 
	 public function set_oficio($dni,$nombre,$apellidos,$email,$oficio,$ciudad,$direccion,$telefono,$celular,$foto,$experiencia){
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
        
		 $sql="insert into oficios(dni,nombre,apellidos,email,oficio,ciudad,direccion,telefono,celular,foto,experiencia) values(:dni,:nombre,:apellidos,:email,:oficio,:ciudad,:direccion,:telefono,:celular,:foto,:experiencia) ";
		 $statement=$conexion->prepare($sql);
		 $statement->bindParam(':dni',$dni);
           $statement->bindParam(':nombre',$nombre);
           $statement->bindParam(':apellidos',$apellidos);
           $statement->bindParam(':email',$email);
           $statement->bindParam(':oficio',$oficio);
           $statement->bindParam(':ciudad',$ciudad);
           $statement->bindParam(':direccion',$direccion);
           $statement->bindParam(':telefono',$telefono);
           $statement->bindParam(':celular',$celular);
           $statement->bindParam(':foto',$foto);
           $statement->bindParam(':experiencia',$experiencia);
		  
		  if(!$statement){
			  return "error al añadir oficio";
		  }
		  else{
			 $statement->execute();
			  return '<SCRIPT>alert ("SE SEAÑADIO CORRECTAMENTE SU OFICIO :D");</SCRIPT>';
              
		  }
		  
	 	}
	 
	  public function eliminar_oficio($dni,$oficio){
		 
		
		  
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("delete from oficios where dni=:dni and oficio=:oficio");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':dni',$dni);
         $statement->bindParam(':oficio',$oficio);
		 
		 if(!$statement){
			  return "error no se pudo eliminar";
		  }
		  else{
              $statement->execute();
			  return "se elimino correctamente";
              
		  }
	 	}
     
}
?>