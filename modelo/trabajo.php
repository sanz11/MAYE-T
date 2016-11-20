<?php
 

 class trabajo{
     
     


	public function set_trabajo($nombre,$rubro,$descripcion,$lugar,$fecha){
		
        
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
        $estado="0";
        
		 $sql="insert into trabajo(nombre,rubro,descripcion,fecha,lugar,estado)values(:nombre,:rubro,:descripcion,:fecha,:lugar,:estado)";
		 $statement=$conexion->prepare($sql);
		 $statement->bindParam(':nombre',$nombre);
           $statement->bindParam(':rubro',$rubro);
           $statement->bindParam(':descripcion',$descripcion);
           $statement->bindParam(':fecha',$fecha);
        $statement->bindParam(':lugar',$lugar);
        $statement->bindParam(':estado',$estado);
		  
		  if(!$statement){
			  return '<SCRIPT>alert ("OH NO! error publicar");</SCRIPT>';
		  }
		  else{
			 $statement->execute();
			  return '<SCRIPT>alert ("tu oferta fue enviado exitosamente para ser verificada");</SCRIPT>';
              
		  }
		  
	 	}
	  

	 public function get_trabajo(){
		 
		 $trabajo = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from trabajo where estado=0");
		 $statement=$conexion->prepare($sql);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $trabajo[]=$filas;
		 
		 }
		 return $trabajo; 
	 	}
     public function search_trabajo($rubro,$lugar){
		 
		 $trabajo = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from trabajo where rubro=:rubro and lugar=:lugar and estado=1");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':rubro',$rubro);
           $statement->bindParam(':lugar',$lugar);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $trabajo[]=$filas;
		 
		 }
		 return $trabajo; 
	 	}
	 
 
     
}
?>