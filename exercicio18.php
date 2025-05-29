<?php

$a = readline("digite o valor total: ");
$b = readline("digite quantos % de desconto o produto tem: ");

$c = $b / 100;
$valordesconto = $a * $c;
$valordescontado = $a - $valordesconto;

echo "o valor $a com $b% desconto é de : $valordescontado\n\n\n";

?>