<?php

include'co.php'; //llama la clase conectar.
$con= conectarbase(); //invoca la funcion conectar, para conectarse a la base de datos.

		/*Datos tabla de clientes*/
		$Id_usuario = $_POST["Id_usuario"];
		$PrimerNombre=$_POST["PrimerNombre"];
		$SegundoNombre=$_POST["SegundoNombre"];		
		$PrimerApellido=$_POST['PrimerApellido'];
		$SegundoApellido=$_POST['SegundoApellido'];
		$Telefono=$_POST['Telefono'];
		$Correo=$_POST['Correo'];
		$Usuario=$_POST['Usuario'];
		$Contrasena=$_POST["Contrasena"];

		$sql="UPDATE usuarios SET PrimerNombre ='".$PrimerNombre."',SegundoNombre ='".$SegundoNombre."',PrimerApellido ='".$PrimerApellido."',SegundoApellido ='".$SegundoApellido."',Telefono ='".$Telefono."',Correo ='".$Correo."',Usuario ='".$Usuario."',Contrasena ='".$Contrasena."' WHERE Id_usuario='".$Id_usuario."';";

		
		if ($con->query($sql)) {
			echo'<script type="text/javascript">
		    alert("Registro Actualizado");
		    window.location.href="ver_usuarios.php";
		    </script>';
		} else{
			echo("Error description: " . mysqli_error($con));	
			echo "Por favor asegurese de haber ingresado la información del Cliente Completa o de no estar ya registrada o repetida y vuelva a intentarlo. Gracias! :)";
				echo "<a href='Form_clientes.php'>Volver al formulario</a>";
		}

?>