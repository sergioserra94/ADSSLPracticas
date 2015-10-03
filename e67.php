<?php

$numero=mt_rand(1,7);

$lunes=1;
$martes=2;
$miercoles=3;
$jueves=4;
$viernes=5;
$sabado=6;
$domingo=7;


if($numero==$lunes){


?>

<html>
<head>
	<title></title>
</head>
<body>
<p><?php  echo "Lunes";}elseif ($numero ==$martes){ echo "Martes";}elseif ($numero==$miercoles) {echo "Miercoles";}elseif ($numero==$jueves) { echo "Jueves";}elseif ($numero==$viernes) {
echo "Viernes";}elseif ($numero==$sabado) {echo "Sabado";}elseif ($numero==$domingo) {echo "Domingo";} ?></p>
</body>
</html>
