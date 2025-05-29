<?php

echo "calculadora de índice de massa corporal(IMC)\n";

$peso = readline("Digite seu peso: ");
$altura = readline("Digite sua altura:  ");

$imc = number_format($peso / ($altura*$altura),2);

if ( $imc < 18.5){
	echo "Abaixo do peso!";
}

if ($imc >= 18.5 && $imc <= 24.9){
	echo "Peso Normal!";
}

if ($imc >= 25 && $imc <= 29.9){
	echo "Sobrepeso!";
}

if ($imc >=30){
	echo "Obesidade!";
}


echo " seu IMC é: $imc";

?>