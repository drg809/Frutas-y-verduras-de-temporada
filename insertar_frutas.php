<?php

// Primero comprobamos que ningún campo está vacío y que todos los campos existan.
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['icono']) && !empty($_POST['icono'])) {

// Si entramos es que todo se ha realizado correctamente
$conexion = mysql_connect("localhost", "root", "");

mysql_select_db("frutasverduras", $conexion);


// Con esta sentencia SQL insertaremos los datos en la base de datos
$a = $_POST['nombre'];
$b = $_POST['icono'];
$c = $_POST['inicio'];
$d = $_POST['final'];

$resultado = mysql_query("INSERT INTO frutas (nombre, icono,inicio,final) VALUES ('".$a."', '".$b."', '".$c."', '".$d."')", $conexion) or die(mysql_error());

// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysql_error($conexion);}?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<head>
<style type="text/css">
#navegador ul{
   list-style-type: none;
   text-align: center;
}
#navegador li{
   display: inline;
   text-align: center;
   margin: 10px;
}
#navegador li a {
   padding: 2px 7px 2px 7px;
   color: #666;
   background-color: #eeeeee;
   border: 1px solid #ccc;
   text-decoration: none;
}
#navegador li a:hover{
   background-color: #333333;
   color: #ffffff;
}
</style>
<title>
Insertar frutas en la tabla
</title>
<body>
<div id="navegador">
<ul>
<li><a href="insertar_frutas1.php">Volver</a></li>
</div>
<h1>Inserción realizada con exito</h1>
</body>
</html>