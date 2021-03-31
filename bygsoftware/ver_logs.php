<?php
  $conexion=new PDO("mysql:host=localhost;dbname=bygelectronics","root","");

  $busqueda=$conexion->query("Select * from funciones;");
    /*Almacenamos el resultado de fetchAll en una variable*/
  $arrDatos=$busqueda->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de logs</title>
    <style>
        .BtnExportar{
            background-color: #394BA4; /* blue */
     border: none;
     color: white;
     padding: 15px 32px;
     text-align: center;
     text-decoration: none;
      display: inline-block;
      font-size: 16px;
        }
        .BtnExportar:hover{
            background-color: #CCCCCD; /* Green */
     border: 1px solid black;
     color: black;
     padding: 15px 32px;
     text-align: center;
     text-decoration: none;
      display: inline-block;
      font-size: 16px;
        }

    </style>
    </head>

    <body>
    <?php
    date_default_timezone_set('America/Bogota');
    
    $fecha_actual=date('Y-m-d');
    $hora_actual=date('h:i:s');
  ?>
    <?php include_once('plantillas/menuprincipal.php');?>
    <center><h1>Listado de logs</h1></center>

    <p> El usuario: Javier P.</p> 
    
    <p><?php
$DateAndTime = date('h:i:s a', time());  
echo "Ha cambiado el estado a las $DateAndTime.";
?></p>
    <table class="tabDatos">
        <tr>
          <th>Estado de Musica</th>
           
        </tr>
        <tbody id="contenidobusqueda">
          <?php
            foreach ($arrDatos as $muestra) {
          ?>
          <tr>
           
            <td><?php echo $muestra['Estado']; ?> </td>
           
          </tr>
          <?php
            }
          ?>
        </tbody>
      </table>
     <center> <a href="" class="BtnExportar">Exportar Log a USB</a></center>
     <br><br><br>

<?php include_once('plantillas/piedepagina.php');?>
    </body>

    </html>