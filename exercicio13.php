<?php

echo "descubra qual e o maior entre 3 números!\n";

$a = readline("Digite o primeiro número: ");
$b = readline("Digite o segundo número: ");
$c = readline("Digite o terceiro número: ");
$maior = 0;

if ($a > $maior){
	$maior = $a;
}

if ($b > $maior){
	$maior = $b;
}

if ($c > $maior){
	$maior = $c;
}

echo "o maior número dos três é: $maior";
?>