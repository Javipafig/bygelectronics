<?php
	include_once 'co.php';
	$con= conectarbase();
	
	$PrimerNombre = $_POST['PrimerNombre'];
	$SegundoNombre = $_POST['SegundoNombre'];
	$PrimerApellido = $_POST['PrimerApellido'];
	$SegundoApellido = $_POST['SegundoApellido'];
	$Identificacion = $_POST['Identificacion'];
	$Telefono = $_POST['Telefono'];
	$Correo = $_POST['Correo'];

	$FotoUsuario = $_FILES['FotoUsuario']['name'];
	$FotoTipo = $_FILES['FotoUsuario']['type'];
	$FotoTamano = $_FILES['FotoUsuario']['size'];

	$FechaNacimiento = $_POST['FechaNacimiento'];
	$Genero = $_POST['Genero'];
	$Usuario = $_POST['Usuario'];
	$Password = $_POST['clave'];
	$Rol = $_POST['Rol'];

	if (empty($_POST['habeasdata'])){
		$habeasdata = "0";
	}else{
		$habeasdata = "1";
	}

	if (empty($_POST['envioinfo'])){
		$envioinfo = "0";
	}else{
		$envioinfo = "1";
	}
	
	if($FotoTamano<=2000000){

		if($FotoTipo == "image/jpeg" || $FotoTipo == "image/jpg"){

			$carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/Origami/img/fotos/usuarios/';

			move_uploaded_file($_FILES['FotoUsuario']['tmp_name'],$carpeta_destino.$FotoUsuario);
		}else{
			echo "Solo se permiten imagenes con formato jpg o jpeg";
		}
	
	}else{
		echo "La imagen es muy grande";
	}

	$sql="INSERT INTO Usuario(PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,Cedula,Telefono,Correo,Foto,FechaNacimiento,Genero,Usuario,Contrasena,IdRol) 
VALUES ('$PrimerNombre','$SegundoNombre ','$PrimerApellido','$SegundoApellido','$Identificacion','$Telefono','$Correo','$FotoUsuario','$FechaNacimiento','$Genero','$Usuario','$Password',$Rol);";


if (mysqli_query($con, $sql)) {
	echo'<script type="text/javascript">
    alert("Usuario Registrado");
    window.location.href="formulario_usuarios.php";
    </script>';
} else{
	echo $sql;
}

	 
?>