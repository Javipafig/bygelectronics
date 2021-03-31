<?php
  $conexion=new PDO("mysql:host=localhost;dbname=bygelectronics","root","");

  $busqueda=$conexion->query("Select * from usuarios;");
    /*Almacenamos el resultado de fetchAll en una variable*/
  $arrDatos=$busqueda->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de usuarios</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link href="estilos/general.css" rel="stylesheet">
    <script type="text/javascript">
       function validarSelect(){
        var porId=document.getElementById("Ejecutar").value;
        document.getElementById("valorSelect").value = porId;
      }    
    </script>

    <script>
       $(document).ready(function () {
         $('#entradafilter').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
              $('#contenidobusqueda tr').hide();
              $('#contenidobusqueda tr').filter(function () {
                  return rex.test($(this).text());
              }).show();

          })

      });
    </script>
   
</head>
<body>
  <?php
    date_default_timezone_set('America/Bogota');
    
    $fecha_actual=date('Y-m-d');
    $hora_actual=date('H:i');
  ?>
  <div id="left"></div>
  <div id="right"></div>
  <div id="top"></div>
  <div id="bottom"></div>

  <?php include_once('plantillas/menuprincipal.php');?>
  <br/><br/><br/>

  <div class="informacion">
    <div class="listado">
      <center><h1>Listado de Usuarios</h1></center>
      <input type="hidden" id="valorSelect" name="valorSelect">
    </div>
    <form action="activacion_usuarios.php" method="post">
      <table border="0">
        <tr>
          <td><div class="Titulo">Buscar</div></td>
          <td colspan="2"><input id="entradafilter" type="text" class="campo"></td>
        </tr>
        <tr>
        
          <td class="opciones"><a href="export/excel_usuarios.php">Exportar Excel</a></td>
        
        </tr>
      </table>
    </form>
    <br/>
    <table class="tabDatos">
        <tr>
          <th>Nombre</th>
           <th>Telefono</th>
          <th>Correo</th>
          <th>Contraseña</th>
           <th>Acciones</th>
        </tr>
        <tbody id="contenidobusqueda">
          <?php
            foreach ($arrDatos as $muestra) {
          ?>
          <tr>
            <td><?php echo $muestra['PrimerNombre']." ".$muestra['SegundoNombre']." ".$muestra['PrimerApellido']." ".$muestra['SegundoApellido']; ?> </td>
            <td><?php echo $muestra['Telefono']; ?> </td>
            <td><?php echo $muestra['Correo']; ?> </td>
            <td><?php echo $muestra['Contrasena']; ?> </td>
            <td colspan="2">
              <center>
                <a href="modificar_usuarios.php?Id_usuario=<?php echo$muestra['Id_usuario'];?>">
                modificar
                </a>
                <a href="eliminar_usuarios.php?Id_usuario=<?php echo$muestra['Id_usuario'];?>">
                  <i class="fas fa-trash-alt" style="font-size:15px; color:black;"></i>
                </a>
              </center>
            </td>
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
</div>
<br><br>

<?php include_once('plantillas/piedepagina.php');?>
</body>


</html>