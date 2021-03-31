<?php
/*Conexion a la base de datos */
	function conectarbase(){  
		$host="localhost";   /*Ip de conexion a google Cloud*/
		$user="root";
		$password="";
		$dbname="bygelectronics";

		$con = new mysqli($host, $user, $password, $dbname) or die ('Could not connect to the database server' . mysqli_connect_error());
		return $con;
		/* sentencias de validacion de conexion*/
		if($con){
			echo "conexion";
		}else{
			echo "fallo en la conexion";

		}
	}
?>