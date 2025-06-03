<?php

$numeroaleatorio = rand(1, 100);
do {
	$numero = readline("Tente adivinhar um numero de 1 a 100: ");
	if ($numero !== $numeroaleatorio){
		echo "\tTente novamente!\n";
	}
}
while ($numero != $numeroaleatorio);
echo "parabens voce acertou! o numero aleatorio era: $numeroaleatorio!";

?>