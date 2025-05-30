<?php

$inicio = readline("Digite o inicio do intervalo: ");
$fim = readline("Digite o final do intervalo: ");
$a = 1;
$numero = 0;

echo "\nintervalo de inicio: $inicio\n";

for($i = $inicio; $i <= $fim ; $i++){
	
	if ($i%2 !== 0){
	echo "nº$a:$i\n";
	$numero = $numero + $i;
	$a++;
	
	}
}
echo "A soma de todos os intervalos é $numero\n";
echo "intervalo final: $fim\n";

?>