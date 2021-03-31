<?php
  $conexion=new PDO("mysql:host=localhost;dbname=bygelectronics","root","");

  $busqueda=$conexion->query("Select * from funciones;");
    /*Almacenamos el resultado de fetchAll en una variable*/
  $arrDatos=$busqueda->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Funciones de Usuario</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <link href="estilos/botones.css" rel="stylesheet">
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
 

  <?php include_once('plantillas/menuprincipal.php');?>
  <br/><br/><br/>

  <div class="informacion">
    <div class="listado">
      <center><h1>Funciones</h1></center>
      <input type="hidden" id="valorSelect" name="valorSelect">
    </div>
    <form action="activacion_usuarios.php" method="post">
      <table border="0">
        <tr>
          <td><div class="Titulo">Buscar</div></td>
          <td colspan="2"><input id="entradafilter" type="text" class="campo"></td>
        </tr>
        
      </table>
    </form>
    <br/>
    <table class="tabDatos">
        <tr>
          <th colspan="2">Musica</th>
           <th colspan="2">Estado</th>
           <th colspan="2">Cambiar</th>
           <th colspan="2">Boton</th>
     
        </tr>
        <tbody id="contenidobusqueda">
          <?php
            foreach ($arrDatos as $muestra) {
          ?>
          <tr>
            <td colspan="2"><?php echo $muestra['Musica']; ?> </td>
            <td colspan="2"><?php echo $muestra['Estado']; ?> </td>
 
            <td colspan="2">
              <center>
                <a href="modificar_estado_funcion.php?Id_Funcion=<?php echo$muestra['Id_Funcion'];?>" class="BtnModificar">
                modificar estado
                </a>
               
              </center>
            </td>
            <td>
                <center> <a href="eliminar_usuarios.php?Id_usuario=<?php echo$muestra['Id_usuario'];?>" class="BtnEmergencia">
                    Boton de emergencia
                </a></center>
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