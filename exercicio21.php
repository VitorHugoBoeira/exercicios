<?php

$numero = readline("digite o numero que deseja multiplicar!:");

$i = 0;

while($i<=10){
	$resultado = $numero*$i;
	echo "$numero x $i = $resultado\n";
	$i++;
}
?>