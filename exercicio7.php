<?php

echo "calculadora de índice de massa corporal(IMC)";

$peso = readline("Digite seu peso: ");
$altura = readline("Digite sua altura: ");

$imc = number_format($peso / ($altura*$altura),2);

echo " seu IMC é: $imc";

?>