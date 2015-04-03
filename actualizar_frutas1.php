<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
Actualizar frutas
</title>
</head>
<body>
<div id="navegador">
<ul>
<li><a href="tf.html">Volver</a></li>
</div>
<form name="holamundo" action="actualizar_frutas.php" method="post">
Id: <input type="number" name="id"><br>
Nombre: <input type="text" name="nombre"><br>
Icono: <textarea name="icono"></textarea><br>
Fecha de Inicio: <input type="date" name="inicio"><br>
Fecha de Final: <input type="date" name="final"><br>
<input type="submit" value="Actualizar">
</form>

</body>
</html>
