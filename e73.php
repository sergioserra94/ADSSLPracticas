<?php 
	$num1="";
	
	for ($i = 1; $i <= 5; $i++) {
	
	$num=mt_rand(0,12);
	
    if ($num<10) $num1=$num1.((string)$num); 
	else if ($num==10) $num1=$num1.'a';
	else if ($num==11) $num1=$num1.'b';
	else if ($num==12) $num1=$num1.'c';
	
	}
	
	$num2="";
	
	for ($i = 1; $i <= 5; $i++) {
	
	$num=mt_rand(0,12);
	
	if ($i==3) $num2=$numero2.'.';
    else if ($num<10) $num2=$num2.((string)$num); 
	else if ($num==10) $num2=$num2.'a';
	else if ($num==11) $num2=$num2.'b';
	else if ($num==12) $num2=$num2.'c';
	
	}
	
    ?>
    
    <html>
     
     <p><b><?php echo "La cadena entera ".$num1." se a convertido al numero entero: ".((integer)$num1);;?></b></p>
     
     <p><b><?php echo "La cadena entera ".$num2." se a convertido al numero real: ".((float)$num2);?></b></p>
     
    
    </html>
