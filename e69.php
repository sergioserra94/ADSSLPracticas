<?php
$numero1=mt_rand()/mt_getrandmax();
$numero2=-1000+mt_rand()/mt_getrandmax()*2000;





?>

<html>
<head>
	<title></title>
</head>
<body>

<form method="" action="e69.php">
<b><?php echo "Numero aleatorio entre 0 y 1 :"?></b><?php echo "$numero1"?>

<b><?php echo "Numero aleatorio entre -1000 y 100 :"?></b><?php echo "$numero2"?>
</br>
<p><?php printf("<b>Numero truncado a milesimas: </b>%f",round("$numero2",3))?></p>
<p><?php printf("<b>Numero truncado a decenas: </b>%f",round(($numero2>0)?$numero2-5:$numero2+5,-1))?></p>
<input class="" type="submit" value="Actualizar"/>
</form>
</body>

</html>
