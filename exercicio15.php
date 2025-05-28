<?php

$velocidade = readline ("Digite a velocidade do carro em km/h: ");

if ($velocidade > 80){
	echo "sua velocidade foi maior que 80km/h!\nvocê foi multado!";
}
else
	echo "você não foi multado!\nVelocidade dentro do limite!";

?>