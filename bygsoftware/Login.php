<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>BYG ELECTRONICS - LOGIN</title>
    <link href="estilos/estilologin.css" rel="stylesheet">
    <style type="text/css">
		footer{
		    position:fixed;
		    bottom:-30px;
		    clear:both;
		    width:100%;
		    height:100px;
		}
		.campos{
			width: 200px;
			height: 40px;
		}
	</style>
</head>
   <body>
	<div class="imagen">
    <center><img src="img/logo2016.png" width="200"></center>
	</div><br><br>
	<!--Formulario de Ingreso(Login) prueba byg -->
	<form method="POST" action="validar_usuario.php" class="login-form">
		<div class="login-page">
	  		<div class="form">
				<table>
					<tr>
						<td><i class="fa fa-user-o"style="font-size:20px"></i></td>
						<td><input type="text" placeholder="Usuario" name="Usuario" required class="campos" /></td>
					</tr>
					<tr>
						<td><i class="fa fa-lock" style="font-size:20px"></i></td>
						<td><input type="password" placeholder="Contraseña" name="Contrasena" id="Contrasena" required class="campos"/></td>
					</tr>
				</table>
				<br/><br/>
      			<input type="submit" value="Ingresar" id="Ingresar" class="button">
      			<p class="message"><a href="cambio_contrasena.php">¿Olvidó su nombre de usuario o contraseña?</a></p>
	  		</div>
		</div>
	</form>
	<center><p>Aún no tienes cuenta?</p><a href="formulario_registro.php">Registrate</a></center>
</body>
<br>
<center><p>Creado por Javier A. Parada Figueroa</p></center>

</html>