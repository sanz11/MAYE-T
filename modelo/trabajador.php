<?php

 class trabajador{
	 
	public function set_trabajador($dni,$nombre,$apellidos,$email,$contrasenia,$ciudad,$direccion,$telefono,$celular,$oficio,$experiencia,$nacimiento,$foto){
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
        
		 $sql="insert into trabajador(dni,nombre,apellidos,email,contrasenia,ciudad,direccion,telefono,celular,oficio,experiencia,nacimiento,foto) values(:dni,:nombre,:apellidos,:email,:contrasenia,:ciudad,:direccion,:telefono,:celular,:oficio,:experiencia,:nacimiento,:foto) ";
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
         $statement->bindParam(':foto',$foto);
		  
		  if(!$statement){
			  return "error registrar";
		  }
		  else{
			 $statement->execute();
			  return "Usted se registro correctamente";
              
		  }
		  
	 	}
	  
	 public function get_trabajador(){
		 
		 $trabajador = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from trabajador");
		 $statement=$conexion->prepare($sql);
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
		 
		  $sql=("select * from trabajador where oficio=:oficio and ciudad=:lugar");
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
	 public function Exists_trabajador($dni){
		 $trabajador = null;
         $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		  
		 
		 $consulta1=(" select * from  trabajador where dni=:dni ");
		 $statement1=$conexion->prepare($consulta1);
		 $statement1->bindParam(':dni',$dni);
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
     
}
?>