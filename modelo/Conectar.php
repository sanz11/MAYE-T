<?php
class Conexion{
	
	 public function get_conexion(){
         $user="root";
        $pass="";
        $host="localhost";
        $db="tesis";
        
          
	      try{
			  $conexion=new PDO("mysql:host=$host; dbname=$db;",$user,$pass);//instanciamos pdo
			  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			  $conexion->exec("SET CHARACTER SET UTF8");
			  
		  }catch(Exception $e){
			  die("Error" . $e->getMessage());
			  echo "Linea del error" . $e->getLine();
		  }
		 
		 return $conexion;
	 }
	
}



?>