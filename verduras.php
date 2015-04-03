<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<head>
<title>
Frutería La Paca
</title>
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
.cabecera{
font-family: Arial;
font-weight: bold;
font-size: 12px;
color: black;
}
.pares{
font-family: Arial;
font-size: 10px;
color: black;
blackground-color:
background: #a7c7dc; /* Old browsers */
background: -moz-linear-gradient(top,  #a7c7dc 0%, #85b2d3 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#a7c7dc), color-stop(100%,#85b2d3)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #a7c7dc 0%,#85b2d3 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #a7c7dc 0%,#85b2d3 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #a7c7dc 0%,#85b2d3 100%); /* IE10+ */
background: linear-gradient(to bottom,  #a7c7dc 0%,#85b2d3 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a7c7dc', endColorstr='#85b2d3',GradientType=0 ); /* IE6-9 */

}
.impares{
font-family: Arial;
font-size: 10px;
color: black;
background: #59a9db; /* Old browsers */
background: -moz-linear-gradient(top,  #59a9db 1%, #308ed1 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#59a9db), color-stop(100%,#308ed1)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #59a9db 1%,#308ed1 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #59a9db 1%,#308ed1 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #59a9db 1%,#308ed1 100%); /* IE10+ */
background: linear-gradient(to bottom,  #59a9db 1%,#308ed1 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#59a9db', endColorstr='#308ed1',GradientType=0 ); /* IE6-9 */

}
</style>
</head>
<body>
<div id="navegador">
<ul>
<li><a href="vertemp.html">Volver</a></li>
</div>
<?php
$conexion = mysql_connect("localhost", "root", "");

mysql_select_db("frutasverduras", $conexion);

$cad = "SELECT id, nombre, icono, month(inicio), month(final) FROM verduras where ( MONTH(inicio) >= MONTH(final)  and ( MONTH(CURDATE()) >= MONTH(inicio) or MONTH(CURDATE()) <= MONTH(final) )) or (MONTH(inicio) <= MONTH(final) and MONTH(CURDATE()) >= MONTH(inicio) and MONTH(CURDATE()) <= MONTH(final))";
$resultado = mysql_query($cad, $conexion) or die(mysql_error());


?>

<table style="cellpadding = 2;">
<tr><td class="cabecera" style="width:100px; text-align:center;">Nombre</td><td  class="cabecera" style="width:200px; text-align:center;">Imagen</td><td  class="cabecera" style="width:200px; text-align:center;">Inicio de temporada</td><td  class="cabecera" style="width:200px; text-align:center;">Final de temporada</td></tr><tr>

<?php if (mysql_num_rows($resultado)>0) { 
while ($row = mysql_fetch_array($resultado, MYSQL_NUM)) { ?>

<td style="padding-left: 15px;" <?php static $cont=0; $cont++; 
if ($cont % 2 == 0) {?>
 Class="pares" 
 <?php } else {?> class="impares" <?php } ?> 
 > <?php   printf($row[1]); ?> </td>

<td style="text-align: center;" <?php 
if ($cont % 2 == 0) {?>
 Class="pares" 
 <?php } else {?> class="impares" <?php } ?> 
 > <img style="max-width: 180px; max-height: 100px;" src=<?php  printf($row[2]); ?> /></td>

<td style="padding-left: 15px;" <?php  
if ($cont % 2 == 0) {?>
 Class="pares" 
 <?php } else {?> class="impares" <?php } ?> 

><?php  printf($row[3]); ?></td>

<td style="padding-left: 15px;" <?php 
if ($cont % 2 == 0) {?>
 Class="pares" 
 <?php } else {?> class="impares" <?php } ?> 
><?php  printf($row[4]);  ?></td></tr>
<?php }} mysql_free_result($resultado); ?>
</table>
</body>
</html>
