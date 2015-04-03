<?php





$conexion = mysql_connect("localhost", "root", "");

mysql_select_db("frutasverduras", $conexion);





$resultado = mysql_query("INSERT INTO verduras (id, nombre, icono, inicio, final) VALUES
(1, 'Acelga', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/acelga.jpg', '2013-09-01', '2013-06-30'),
(2, 'Ajo', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/ajo.jpg', '2013-01-01', '2013-12-31'),
(3, 'Alcachofa', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/alcachofa.jpg', '2013-09-01', '2013-05-21'),
(4, 'Apio', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/apio.jpg', '2013-09-01', '2013-05-31'),
(5, 'Berenjena', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/berenjena.jpg', '2013-09-01', '2013-05-31'),
(6, 'Brocoli', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/brocoli.jpg', '2013-09-01', '2013-06-30'),
(7, 'Calabacin', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/calabacin.jpg', '2013-01-01', '2013-12-31'),
(8, 'Calabaza', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/calabaza.jpg', '2013-03-01', '2013-12-31'),
(9, 'Cardo', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/cardo.jpg', '2013-10-01', '2013-02-28'),
(10, 'Cebolla', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/cebolla.jpg', '2013-01-01', '2013-12-31'),
(11, 'Lombarda', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/lombarda.jpg', '2013-09-01', '2013-05-31'),
(12, 'Coliflor', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/coliflor.jpg', '2013-09-01', '2013-06-30'),
(13, 'Endibia', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/endibia.jpg', '2013-09-01', '2013-04-30'),
(14, 'Escarola', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/escarola.jpg', '2013-09-01', '2013-04-30'),
(15, 'Esparrago', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/esparrago.jpg', '2013-02-01', '2013-06-30'),
(16, 'Espinaca', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/espinaca.jpg', '2013-01-01', '2013-12-31'),
(17, 'Guisante', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/guisante.jpg', '2013-10-01', '2013-04-30'),
(18, 'Haba', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/haba.jpg', '2013-04-01', '2013-12-31'),
(19, 'Judia verde', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/judiaverde.jpg', '2013-01-01', '2013-12-31'),
(20, 'Lechuga', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/lechuga.jpg', '2013-01-01', '2013-12-31'),
(21, 'Nabo', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/nabo.jpg', '2013-01-01', '2013-12-31'),
(22, 'Pepino', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/pepino.jpg', '2013-01-01', '2013-12-31'),
(23, 'Pimiento', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/pimiento.jpg', '2013-09-01', '2013-06-30'),
(24, 'Puerro', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/puerro.jpg', '2013-09-01', '2013-06-30'),
(25, 'Rabano', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/rabano.jpg', '2013-01-01', '2013-12-31'),
(26, 'Remolacha', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/remolacha.jpg', '2013-01-01', '2013-12-31'),
(27, 'Repollo', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/repollo.jpg', '2013-09-01', '2013-06-30'),
(28, 'Tomate', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/tomate.jpg', '2013-01-01', '2013-12-31'),
(29, 'Zanahoria', 'http://p5.ocu.org/ASPX/OCU.P5Calculators/Images/FVCalendar/items/zanahoria.jpg', '2013-01-01', '2013-12-31');", $conexion) or die(mysql_error());


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
<li><a href="tv.html">Volver</a></li>
</div>
<h1>Se han introducido los datos en la tabla verduras</h1>
</body>
</html>