<html>
<head></head>
<body>
<h1>12655. C09 </h1>

<h2>Descripción</h2>
Escribe un programa que solicite las calificaciones de Matemáticas, Español y Cocina y nos de su promedio.

<h2>Entrada</h2>
Tres números reales

<h2>Salida</h2>
Un número real representado el promedio de los tres números

<h2>Ejemplo</h2>
<table>
<tr>
    <th>Entrada</th>
    <th>Salida</th>
    <tr></tr>
    <th>10 - 9.0 - 9.5</th>
    <th>9.5</th>
</tr>

</table>

<?php
$a=10;
$b=9;
$c=9.5;

$m=($a+$b+$c)/3;
echo "Variables a, b y c: ", $a, " ", $b," ", $c, "<br>";
echo "Prom: ", $m;
?>


</body>
</html>