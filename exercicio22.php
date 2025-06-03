<?php

$maior = 0;

for ($i=0; $i <=5; $i++){
	$numero = readline("Digite um numero para descobrir qual o maior entre eles: ");
	$maior;	
	if($numero > $maior){ 
		$maior = $numero;
	}
}
echo "o maior número é: $maior";

?>