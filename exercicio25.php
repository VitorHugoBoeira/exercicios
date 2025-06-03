<?php

$soma = 0;
$i = 0;
do{

	$numero = readline("Digite um numero que deseja adicionar ao calculo de media: ");
	$soma = $numero + $soma;
	$i++;
}
while($numero !=0);
$i--;
$resultado = $soma / $i;

echo " a media dos números digitados foi $resultado";

?>