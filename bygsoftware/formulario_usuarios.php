<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="estilos/general.css" rel="stylesheet">
		<title>Registro de usuarios</title>
	</head>
	<body>
		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>
	
		<?php include_once('plantillas/menuprincipal.php');?>
		<br/><br/>
		<center><h1>Registro de Usuarios</h1></center>
		<div class="contenido">
			<form method="post" action="registrar_usuario.php" enctype="multipart/form-data">
				<table>
					<tr>
						<td class="NomCam" colspan="2">Primer Nombre</td>
						<td colspan="2"><input type="text" class="campo" name="PrimerNombre" id="PrimerNombre" required/></td>
						<td class="NomCam">Segundo Nombre</td>
						<td><input type="text" class="campo" name="SegundoNombre" required/></td>
					</tr>
					<tr>
						<td colspan="2" class="NomCam">Primer Apellido</td>
						<td colspan="2"><input type="text" class="campo" name="PrimerApellido" required/></td>
						<td class="NomCam">Segundo Apellido</td>
						<td><input type="text" class="campo" name="SegundoApellido" required/></td>
					</tr>
					<tr>
						<td class="NomCam">No.Cédula</td>
						<td><input type="text" class="campo" name="Identificacion" required/></td>
						<td class="NomCam">Tipo</td>
						<td>
							<select class="campo">
								<option selected disabled>--Seleccionar--</option>
								<option value="CC">C.C</option>
								<option value="CE">C.E</option>
							</select>
						</td>
						<td class="NomCam">No. Teléfono</td>
						<td><input type="text" class="campo" name="Telefono" required/></td>
					</tr>
					<tr>
						<td colspan="2"class="NomCam">Correo</td>
						<td colspan="2"><input type="text" class="campo" name="Correo" required/></td>
						<td class="NomCam">Rol</td>
						<td>
							<select name="Rol" id="Rol" required>
								<option value="0" disabled selected>Seleccione</option>
								<?php
									include_once 'co.php';
									$con= conectarbase();
									$query = $con->query ("SELECT * FROM roles;");
									while ($valores = mysqli_fetch_array($query)) {
										echo '<option value="'.$valores[Id].'">'.$valores[Rol].'</option>';
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="NomCam">Fecha de nacimiento</td>
						<td colspan="2"><input type="date" class="campo" name="FechaNacimiento" required/></td>
						<td class="NomCam">Género</td>
						<td>
							<select name="Genero" class="campo" required>
								<option value="0" disabled selected>Seleccione</option>
								<option value="Hombre">Hombre</option>
								<option value="Mujer">Mujer</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="NomCam">Usuario</td>
						<td colspan="3"><input type="text" class="campo" name="Usuario" required/></td>
						<td class="NomCam">Contraseña</td>
						<td><input type="password"  class="campo" name="clave" required/></td>
					</tr>
					<tr>
						<td colspan="6" class="NomCam">
							<center>
								Foto <input type="file" name="FotoUsuario" size="20" required/>
							</center>
						</td>
					</tr>
				</table>
				<br>
				<div class="bot">
					<input type="submit" name="Registrar" value="Registrar" class="boton">
				</div>
			</form>
		</div>
		<br/><br/><br/>
	</body>

	<?php include_once('plantillas/piedepagina.php');?>
</html>