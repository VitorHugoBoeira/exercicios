<?php

$alunos = [];
function media($notas){
  return array_sum($notas) / count($notas);
   
}
do{
    echo "\nMenu:\n1. Adicionar aluno\n2. Listar alunos\n3. Sair\n";

    $terminal = readline("Escolha uma opção: ");
switch($terminal){
    case 1:
        $nome = readline("Digite o nome do aluno: ");

        $notas = [];
        for ($i = 1; $i <= 3; $i++) {
            $nota = (float) readline("Digite a nota $i: ");
            $notas[] = $nota;
        }

        $alunos[] = [
            "nome" => $nome,
            "notas" => $notas
        ];

        echo "Aluno adicionado com sucesso!\n";
        break;
     case 2:
        if (empty($alunos)) {
            echo "Nenhum aluno encontrado\n";
        } else {
            echo "\nLista de Alunos:\n";
            foreach ($alunos as $aluno) {
                $nome = $aluno["nome"];
                $notas = $aluno["notas"];
                media($notas);
                echo "Nome: $nome\n";
                echo "Notas: " . implode(", ", $notas) . "\n";
                echo "Média: " . number_format(media($notas), 2) . "\n\n";

            }
        }
        break;

    case 3:
        echo "Encerrando o programa.\n";
        break;

    default: 
        echo "Opção inválida. Tente novamente.\n";
        break;
    }
}
while($terminal != 3)

?>