<?php
	session_start();
	$_SESSION['Usuario'] = $Usuario; 
	

	include'co.php'; //llama la clase conectar.
	$con= conectarbase(); //invoca la funcion conectar, para conectarse a la base de datos.
		/*variables de login */
		$Usuario=$_POST['Usuario'];
		$Contrasena=$_POST['Contrasena'];

		$usuarioregistrado="";
		$pass="";
	
		$sql="SELECT Usuario,Contrasena FROM usuarios WHERE Usuario='".$Usuario."';";

		$consulta=mysqli_query($con,$sql);

		while ($row = mysqli_fetch_array($consulta)) {
			$usuarioregistrado=$row['Usuario'];
			$pass=$row['Contrasena'];
		}

		if($Usuario==$usuarioregistrado&&$Contrasena==$pass){
			$_SESSION['Usuario']=$usuarioregistrado;
			header("Location: menuprincipal.php");
		}else{
			echo "Usuario o Contrasena incorrecto.";
		}
?>