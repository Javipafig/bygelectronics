<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BYG ELECTRONICS</title>
</head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  padding: 0;
}

.navbar {
  overflow: hidden;
  background-color: #304090;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #6F85F4;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


</style>
<body>
       <div class="navbar">
  <a href="menuprincipal.php" style="background-color:white;"><img src="img/logo2016.png" width="80"></a>
  <div class="dropdown">
    <button class="dropbtn">Usuarios 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="formulario_usuarios.php">Registrar Usuario</a>
      <a href="ver_usuarios.php">Administracion de Usuarios</a>
     </div>
  </div> 
  <a href="funciones.php">Funciones</a>
  <a href="ver_logs.php">Visualizar logs</a>
  <a href="cerrar_sesion.php" style="float:right;">Cerrar sesión</a>
</div>

</body>
</html>