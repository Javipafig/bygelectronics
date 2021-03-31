<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="validar2.js"></script>
		<link href="estilos/estilopie.css" rel="stylesheet">
		<title>Modificar usuarios</title>
	</head>
	<body>
	
		<?php include_once('plantillas/menuprincipal.php');?>
		<div class="contenido">
			<table>
				<tr>
					<td>
						<form method="post" action="actualizar_usuario.php" name="registro" id="registro" enctype="multipart/form-data">
							<?php
								date_default_timezone_set('America/Bogota');
								
								$fecha_actual=date('Y-m-d');
								$hora_actual=date('H:i');

								include_once("co.php");
								$con= conectarbase(); 
								$CodUsu = $_GET["Id_usuario"];
								$query = mysqli_query($con,"select * from Usuarios where Id_usuario=".$CodUsu.";");

								while ( $datos = mysqli_fetch_array($query)) {
									echo "<input type='hidden' name='Id_usuario' id='Id_usuario' value='".$CodUsu."'></td>";
							?>
		
	    					<table>
	    						<tr>
									<td colspan="2"><h2>Detalles de usuario</h2></td>
								</tr>
								<tr>
									<td>Primer Nombre</td>
									<td><input type="text" id="valid" name="PrimerNombre" value="<?php echo $datos['PrimerNombre']?>"></td>
									<td>Segundo Nombre</td><td><input type="text" id="valid" name="SegundoNombre" onfocus="pintarBlanco(this)" value="<?php echo $datos['SegundoNombre']?>"></td>
								</tr>
								<tr>
									<td>Primer Apellido</td><td><input type="text" id="valid" name="PrimerApellido" onfocus="pintarBlanco(this)" value="<?php echo $datos['PrimerApellido']?>"required></td>
									<td>Segundo Apellido</td>
									<td><input type="text" id="valid" name="SegundoApellido" onfocus="pintarBlanco(this)" value="<?php echo $datos['SegundoApellido']?>" required></td>
								</tr>
								<tr>
									
									<td>Telefono</td><td><input type="text" id="valid" name="Telefono" onfocus="pintarBlanco(this)" value="<?php echo $datos['Telefono']?>"required></td>
								</tr>
								<tr>
									<td>Correo</td>
									<td><input type="text" id="valid" name="Correo" onfocus="pintarBlanco(this)" value="<?php echo $datos['Correo']?>" required></td>
									
								</tr>
								<tr>
									
									<td>Usuario</td>
									<td><input type="text" id="valid" name="Usuario" onfocus="pintarBlanco(this)" value="<?php echo $datos['Usuario']?>" required></td>
								</tr>
								<tr>
									<td>Contraseña</td>
									<td><input type="password" id="valid" name="Contrasena" onfocus="pintarBlanco(this)" value="<?php echo $datos['Contrasena']?>" required></td>
								</tr>
									<td></td>
									
								</tr>
								<tr><td></td></tr>
								<tr><td></td></tr>
								<tr>
									<td colspan="7"><center>
										<input type="submit" id="Actualizar" name="Actualizar" value="Actualizar">
									</center></td>
								</tr>
							</table>
						</form>
					<?php
						}
					?>
				</td>
			</tr>
		</table>
		<br/><br/><br/><br/>
	</body>
		<?php include_once('plantillas/piedepagina.php');?>
</html>