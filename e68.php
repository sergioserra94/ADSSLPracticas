<?php

$numero1 = mt_rand(-100,100);
$numero2= mt_rand(1,200);
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multi=$numero1*$numero2;
$division=$numero1/$numero2;
$resto=$numero1%$numero2;
$opuesto=-$numero1;
$incremento=++$numero1;
$numero1--;
$decremento=--$numero1;
++$numero1;
?>


<html>
<head>
	<title>ejercicio e68</title>
</head>
<body style="margin-top:50px;">
<center><h2><table >
	<tr>
		<a><b>Suma de valores random</b></a>
	</tr>
	</br>
	<td>
		<a><?php echo "$numero1+$numero2=$suma";?></a>
	</td>
</table>
<table>
	<tr>
		<a><b>Resta de valores random</b></a>
	</tr>
	</br>
	<td>
		<a><?php echo "$numero1-$numero2=$resta";?></a>
	</td>
</table>
<table>
	<tr>
		<a><b>Producto de valores random</b></a>
	</tr>
	</br>
	<td>
		<a><?php echo "$numero1*$numero2=$multi";?></a>
	</td>
</table>
<table>
	<tr>
		<a><b>	Division de valores random</b></a>
	</tr>
	</br>
	<td>
		<a><?php echo "$numero1/$numero2=$division";?></a>
	</td>
</table>
<table>
	<tr>
		<a><b>	Resto de valores random</b></a>
	</tr>
	</br>
	<td>
		<a><?php echo "$numero1%$numero2=$resto";?></a>
	</td>
</table>
<table>
	<tr>
		<a><b>	El opuesto de <?php echo "$numero1";?> es <?php echo "$opuesto";?></b> </a>
	</tr>
</table>
</br>
<table>
	<tr>
		<a><b>	El incremento de <?php echo "$numero1";?> es <?php echo "$incremento"; ?></b> </a>
	</tr>
</table>
</br>
<table>
	<tr>
		<a><b>	El decremento de <?php echo "$numero1";?> es <?php echo "$decremento"; ?></b> </a>
	</tr>
</table></h2>
</center>
</body>
</html>
