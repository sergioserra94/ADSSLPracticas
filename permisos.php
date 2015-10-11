<?php


const PER_USER=1;
const PER_ADMIN=2;
const PER_FACT=4;


$user=PER_USER;

if($user & PER_USER){

print("El usuario tiene acceso al inicio");

}else{

	print("El usuario no tiene acceso al inicio");
}
echo"</br>";
if($user & PER_ADMIN){

	print("El usuario tiene acceso como administrador");


}else{

	print("El usuario no tiene acceso como administrador");
}
echo"</br>";
if($user & PER_FACT){

	print("El usuario tiene acceso a facturacion");


}else{

	print("El usuario no tiene acceso a facturacion");
}

?>
