<?php
$listadecompras = [];
echo "escolha uma das opções abaixo!\n1 - Adicionar item\n2 - Remover item\n3 - Listar itens\n4 - consultar quantidade\n5 - Sair\n";

do {
    $terminal = readline("Digite qual operação deseja executar: ");
    switch($terminal){
       
        case 1:
            $item = readline("Digite o produto que deseja adicionar a lista: ");
            array_push($listadecompras, $item);
            break;
       
        case 2:
            $remover = readline("Digite o item qual deseja remover: ");
            $chave = array_search($remover, $listadecompras);
            if ($chave !== false){
                unset($listadecompras[$chave]);
            }
            break;

        case 3:
            print_r($listadecompras);
            break;
        
         case 4:
            echo count($listadecompras);
            echo "\n";
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