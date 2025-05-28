<?php

$compra = readline("Digite o valor da compra: ");
$acrescimo = readline("Digite % do acressimo em cima da compra: ");

$acrescimo = $acrescimo / 100;

$compraacr = $compra + ($compra * $acrescimo);

$compra10x = $compraacr / 10;

echo "O valor original da compra fica R$ $compra\n"; 
echo "O valor da compra com acréscimo fica R$ $compraacr\n"; 
echo "O valor da compra com acréscimo em 10x fica R$ $compra10x"; 

?>
