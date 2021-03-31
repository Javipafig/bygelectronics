<?php

include'co.php'; //llama la clase conectar.
$con= conectarbase(); //invoca la funcion conectar, para conectarse a la base de datos.

		/*Datos tabla de clientes*/
		$Estado = $_POST["Estado"];
		$Log_musica = $_POST["Log_musica"];
		$Id_Funcion = $_POST["Id_Funcion"];

		$sql="UPDATE funciones SET Estado ='".$Estado."',Log_musica ='".$Log_musica."' WHERE Id_Funcion='".$Id_Funcion."';";

		
		if ($con->query($sql)) {
			echo'<script type="text/javascript">
		    alert("Estado Actualizado");
		    window.location.href="funciones.php";
		    </script>';
		} else{
			echo("Error description: " . mysqli_error($con));	
			echo "Por favor asegurese de haber ingresado la información del Cliente Completa o de no estar ya registrada o repetida y vuelva a intentarlo. Gracias! :)";
				echo "<a href='Form_clientes.php'>Volver al formulario</a>";
		}

?>