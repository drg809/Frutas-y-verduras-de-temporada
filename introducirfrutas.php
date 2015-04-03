<?php





$conexion = mysql_connect("localhost", "root", "");

mysql_select_db("frutasverduras", $conexion);





$resultado = mysql_query("INSERT INTO frutas (id, nombre, icono, inicio, final) VALUES
(1, 'Aguacate', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/aguacate.jpg', '2013-05-01', '2013-11-30'),
(2, 'Albaricoque', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/albaricoque.jpg', '2013-04-01', '2013-09-30'),
(3, 'Breva', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/breva.jpg', '2013-06-01', '2013-07-31'),
(4, 'Caqui', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/caqui.jpg', '2013-09-01', '2014-01-31'),
(5, 'Cereza', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/cereza.jpg', '2013-04-01', '2013-07-31'),
(6, 'Chirimoya', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/chirimoya.jpg', '2013-09-01', '2013-01-31'),
(7, 'Ciruela', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/ciruela.jpg', '2013-05-01', '2013-09-30'),
(8, 'Coco', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/coco.jpg', '2013-01-01', '2013-12-31'),
(9, 'Frambuesa', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/frambuesa.jpg', '2013-05-01', '2013-09-30'),
(10, 'Fresa', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/fresa.jpg', '2013-01-01', '2013-06-30'),
(11, 'Granada', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/granada.jpg', '2013-08-01', '2013-11-30'),
(12, 'Higo', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/higo.jpg', '2013-06-01', '2013-10-31'),
(13, 'Kiwi', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/kiwi.jpg', '2013-09-01', '2013-04-30'),
(14, 'Lima', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/lima.jpg', '2013-01-01', '2013-12-31'),
(15, 'Limon', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/limon.jpg', '2013-09-01', '2013-06-21'),
(16, 'Litchi', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/litchi.jpg', '2012-11-01', '2013-02-28'),
(17, 'Mandarina', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/mandarina.jpg', '2013-10-01', '2013-04-30'),
(18, 'Mango', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/mango.jpg', '2013-07-01', '2013-11-30'),
(19, 'Manzana', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/manzana.jpg', '2013-07-01', '2013-02-28'),
(20, 'Maracuya', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/maracuya.jpg', '2013-01-01', '2013-12-31'),
(21, 'Melocoton', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/melocoton.jpg', '2013-04-01', '2013-10-31'),
(22, 'Melon', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/melon.jpg', '2013-05-01', '2013-10-31'),
(23, 'Membrillo', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/membrillo.jpg', '2013-07-01', '2013-10-31'),
(24, 'Naranja', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/naranja.jpg', '2013-10-01', '2013-05-31'),
(25, 'Nectarina', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/nectarina.jpg', '2013-04-01', '2013-10-31'),
(26, 'Nispero', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/nispero.jpg', '2013-03-01', '2013-06-30'),
(27, 'Papaya', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/papaya.jpg', '2013-01-01', '2013-12-31'),
(28, 'Paraguaya', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/paraguaya.jpg', '2013-07-01', '2013-09-30'),
(29, 'Pera', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/pera.jpg', '2013-06-01', '2013-12-31'),
(30, 'Piña', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/pinia.jpg', '2013-01-01', '2013-12-31'),
(31, 'Platano', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/platano.jpg', '2013-01-01', '2013-12-31'),
(32, 'Pomelo', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/pomelo.jpg', '2013-11-01', '2013-05-31'),
(33, 'Sandia', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/sandia.jpg', '2013-05-01', '2013-09-30'),
(34, 'Uva', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/uva.jpg', '2013-08-01', '2013-12-31');", $conexion) or die(mysql_error());


$my_error = mysql_error($conexion);?>
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
Inserción automática
</title>
<body>
<div id="navegador">
<ul>
<li><a href="tf.html">Volver</a></li>
</div>
<h1>Se han introducido los datos en la tabla frutas</h1>
</body>
</html>