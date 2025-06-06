<?php

$estoque = [];
echo "escolha uma das opções abaixo!\n1 - Adicionar item\n2 - Remover item\n3 - Listar itens\n4 - consultar quantidade\n5 - Sair\n";

do {
    $terminal = readline("Digite qual operação deseja executar: ");
    switch($terminal){
       
        case 1:
            $item = readline("Digite o produto que deseja adicionar a lista: ");
            $quantidade = readline ("Digite a quantidade do produto: ");
            if (array_key_exists($item, $estoque)){
                $estoque[$item] += $quantidade;
            }
            else {
            $estoque[$item] = $quantidade;     
            }
            break;
       
        case 2:
            $item = readline("Digite o item qual deseja remover: ");
            $quantidade = readline("Digite a quantidade que quer remover do item: ");
            $remover = array_key_exists($item,$estoque);
            if ($remover !== false){
                $estoque[$item] -= $quantidade;
                if($estoque[$item] <= 0){
                    unset($estoque[$item]);
                }
            }
            
            break;

        case 3:
            foreach($estoque as $item => $quantidade){
            echo "$item: $quantidade\n";
        }
            break;
        
         case 4:
            $total = array_sum($estoque);
            echo "Total de Itens no estoque: $total\n";
            break;
        case 5:
            echo "Saindo!";
            break;
        default:
            echo "escolha uma operação valida!\n";
            break;
    }
}
while ($terminal !=5);

?>