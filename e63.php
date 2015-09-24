<?php

$numero = mt_rand(100,200);

$numero1=&$numero;

?>

<html>
<a><b><u>Numero aleatorio entre 100 y 200, ambos inlcusive</u></b></a>
</br>
</br>
<a><b><?php echo $numero1;?></b></a>
</br>
</br>
<form action="e63.php">
<input type="submit" value="Actualizar"></input>
</form>

</html>
