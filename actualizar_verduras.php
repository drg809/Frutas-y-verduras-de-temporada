<?php


if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['icono']) && !empty($_POST['icono'])) {


$conexion = mysql_connect("localhost", "root", "");

mysql_select_db("frutasverduras", $conexion);



$a1 = $_POST['id'];
$a = $_POST['nombre'];
$b = $_POST['icono'];
$c = $_POST['inicio'];
$d = $_POST['final'];

$resultado = mysql_query("UPDATE  verduras SET  nombre =  '".$a."',icono =  '".$b."',inicio =  '".$c."',final =  '".$d."'  WHERE  id ='".$a1."'", $conexion) or die(mysql_error());


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
Actualizar verduras
</title>
<body>
<div id="navegador">
<ul>
<li><a href="actualizar_verduras1.php">Volver</a></li>
</div>
<h1>Actualización realizada con exito</h1>
</body>
</html>