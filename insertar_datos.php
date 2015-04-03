<?php

// Primero comprobamos que ningún campo esté vacío y que todos los campos existan.
if(isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['icono']) && !empty($_POST['icono'])) {

// Si entramos es que todo se ha realizado correctamente
$conexion = mysql_connect("localhost", "root", "");

mysql_select_db("frutasverduras", $conexion);


// Con esta sentencia SQL insertaremos los datos en la base de datos
$a = $_POST['nombre'];
$b = $_POST['icono'];

$resultado = mysql_query("INSERT INTO frutas (nombre, icono) VALUES ('".$a."', '".$b."')", $conexion) or die(mysql_error());

// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysql_error($conexion);}?>