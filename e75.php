<?php
	$numero = mt_rand(1,100);
	
?>
<html>
<a><b><u>Numero aleatorio entre 1 y 100, ambos inlcusive</u></b></a>
</br>
</br>
<table>
<td align="center" style="border: 1px solid red; background:aqua; color:green; width:20px; "> <?php echo $numero;?> </td>
</table>
</br>
<form action="e75.php">
<input type="submit" value="Actualizar"></input>
</form>

</html>
