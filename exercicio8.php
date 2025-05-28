<?php

$produto = readline("Digite o valor do produto que deseja calcular com o desconto: ");
$desconto = readline("Digite a % do desconto: ");

$desconto = $desconto / 100;

$produtodes = $produto * $desconto;

echo "O valor original do produto fica R$ $produto\n"; 
echo "O produto com o desconto fica R$ $produtodes"; 

?>