<?php
do{
echo "escolha uma das opções:\n1-Somar dois números\n2-Subtrair dois números\n3-Verificar se um número é par ou ímpar\n 4-Sair\n";
$caso = readline("Qual opção deseja escolher?: ");


switch($caso){

	case 1:
		$a = readline("escolha o primeiro número: ");
		$b = readline("escolha o segundo número: ");
		$resultado = $a + $b;
		echo "o resultado da soma de $a + $b é $resultado"; 
		break;

	case 2:
		$a = readline("escolha o primeiro número: ");
		$b = readline("escolha o segundo número: ");
		$resultado = $a - $b;
		echo "o resultado da subtração de $a - $b é $resultado";
		break;
	
	case 3:
		$a = readline("Digite um numero para saber se ele e impar ou par: ");
		if ($a%2 == 0){
			echo "o numero $a é par!";
		}
		else {
			echo "o numero $a é impar!";
		}
		break;

	case 4:
		echo "Saindo!";
		break;
	
	default:
		echo "operação invalida! Escolha entre 1, 2, 3 ou 4!";
		break;
}
}
while ($caso != 4)
?>
