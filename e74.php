<?php
$numero = mt_rand(100,200);

$decimal="$numero";
$binario=decbin($numero);
$octal=decoct($numero);
$hexadecimal=dechex($numero);
?>

<html>
<a><b><u>Numero aleatorio entre 100 y 200, ambos inlcusive</u></b></a>
</br>
</br>
<a><b>Numero decimal: <?php echo $decimal;?></b></a>
</br>
</br>
<a><b>Numero binario: <?php echo $binario;?></b></a>
</br>
</br>
<a><b>Numero octal: <?php echo $octal;?></b></a>
</br>
</br>
<a><b>Numero hexadecimal: <?php echo $hexadecimal;?></b></a>
</br>
</br>
<form action="e74.php">
<input type="submit" value="Actualizar"></input>
  </form>
</html>
