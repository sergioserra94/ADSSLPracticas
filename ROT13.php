<?php

$cadena="hola";

echo $cadena;

for ($i=0; $i < strlen($cadena); $i++) {

         if ($cadena[$i]!=' ') {

         	if (chr(ord($cadena[$i])+13)<'z') {

         		$cadena[$i]=chr(ord($cadena[$i])+13);
         		
         	}else{
         		$cadena[$i]=chr(ord($cadena[$i])-13);

         	}
            
}
       
}
 echo $cadena;

?>
