<?php

echo "escolha uma das opções abaixo!\n1 - Exibir 'Olá, Mundo!'\n2 - Exibir a data atual!\n3 - Calcular a soma de dois números\n4 - sair!";
do {
	$a = readline("Escolha uma opção: ");
	switch($a){
		case 1:
			echo "Olá, Mundo!\n";
			break;
		case 2:
			$data = date('d/m/Y');
			echo "a data de hoje é: $data\n";
			break;
		case 3:
			$y = readline("Digite o primeiro numero: ");
			$x = readline("Digite o segundo numero: ");
			$resultado = $y + $x;
			echo "a soma dos numeros $y e $x é: $resultado!\n";
			break;
		case 4:
			echo "Saindo!";
			break;
		default:
			echo "escolha uma opção de 1 a 4!";
			break;
	}
}
while($a != 4)
?>