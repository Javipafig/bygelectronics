<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="validar2.js"></script>
		<link href="estilos/estilopie.css" rel="stylesheet">
		<title>Modificar usuario</title>
	</head>
	<body>
	
		<?php include_once('plantillas/menuprincipal.php');?>
		<div class="contenido">
			<table>
				<tr>
					<td>
						<form method="post" action="actualizar_estado_funcion.php" name="registro" id="registro" enctype="multipart/form-data">
							<?php
								date_default_timezone_set('America/Bogota');
								
								$fecha_actual=date('Y-m-d');
								$hora_actual=date('H:i');

								include_once("co.php");
								$con= conectarbase(); 
								$CodFun = $_GET["Id_Funcion"];
								$query = mysqli_query($con,"select * from Funciones where Id_Funcion=".$CodFun.";");

								while ( $datos = mysqli_fetch_array($query)) {
									echo "<input type='hidden' name='Id_Funcion' id='Id_Funcion' value='".$CodFun."'></td>";
							?>
		
	    					<table>
	    						<tr>
									<td colspan="2"><center><h2>Modificar estado de Musica</h2></center></td>
								</tr>
								<tr>
									<td>Estado</td>
                                   <td> <select id="valid" name="Estado" style="width:160px" onfocus="pintarBlanco(this)">
											<option value="0">Seleccionar</option>
											<?php
												echo "<option value='".$datos['Estado']."' selected>".$datos['Estado']."</option>";
												if ($datos['Estado'] == "ON"){
													echo "<option value='OFF'>OFF</option>";
												}else{
													echo "<option value='ON'>ON</option>";
												}
											?>
										</select></td>
									
									<td><input type="hidden" id="valid" name="Log_musica" value="<?php echo $datos['Log_musica']?>"></td>
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
	<br/><br/>
		<?php include_once('plantillas/piedepagina.php');?>
</html>