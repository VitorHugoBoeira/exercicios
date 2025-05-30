<?php

$inicio = readline("Digite o inicio do intervalo: ");
$fim = readline("Digite o final do intervalo: ");
$a = 1;

echo "\nintervalo de inicio: $inicio\n";

for($i = $inicio; $i <= $fim ; $i++){
	
	if ($i%2 == 0){
	echo "nº$a:$i\n";
	$a++;
	}
}


echo "intervalo final: $fim\n";

?>