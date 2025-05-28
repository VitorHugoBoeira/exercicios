<?php

echo "calcule o volume de uma caixa\n";

$comprimento = readline("Digite o comprimento da caixa: ");
$largura = readline("Digite o largura da caixa: ");
$altura = readline("Digite o altura da caixa: ");

$resultado = ($comprimento * $largura) * $altura;

echo "o volume da caixa é: $resultado";

?>