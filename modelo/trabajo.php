<?php
$fe="";
 include ('date.php');
        
    $fecha= new fechahoy();
     $fe=$fecha->fechahoy();

 class trabajo{
     
     


	public function set_trabajo($nombre,$rubro,$descripcion,$lugar){
		 $fef="16-2-2";
        
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
        
		 $sql="insert into trabajo(nombre,rubro,descripcion,fecha,lugar)values(:nombre,:rubro,:descripcion,:fecha,:lugar)";
		 $statement=$conexion->prepare($sql);
		 $statement->bindParam(':nombre',$nombre);
           $statement->bindParam(':rubro',$rubro);
           $statement->bindParam(':descripcion',$descripcion);
           $statement->bindParam(':fecha',$fef);
        $statement->bindParam(':lugar',$lugar);
		  
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
		 
		  $sql=("select * from trabajo");
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
		 
		  $sql=("select * from trabajo where rubro=:rubro and lugar=:lugar");
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