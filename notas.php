<?php

$alunos = [];

echo "escolha uma das opções abaixo!\n1 - Adicionar nota\n2 - mostrar alunos\n";

do{
    $terminal = readline("Digite qual opção deseja executar: ");
        switch($terminal){
            case 1:
                $aluno = readline("Digite o nome do aluno: ");
                $nota1 = readline ("Digite o valor da primeira nota: ");
                $nota2 = readline ("Digite o valor da segunda nota: ");
                $nota3 = readline ("Digite o valor da terceira nota: ");
                if (array_key_exists($aluno ,$alunos)){
                    echo "esse aluno ja existe! Se o aluno tem o mesmo nome digite o sobrenome!\n";
                }
                else{
                    $alunos[$aluno] = ["nota1" => (float)$nota1, "nota2" => (float)$nota2, "nota3" => (float)$nota3];
                }
                break;
            
            case 2:
            $soma = array_sum($aluno);
            $media = $soma / 3;
            foreach($alunos as $aluno => $nota1, $nota2, $nota3)
            echo "nome:$aluno\n%nota:$nota1, $nota2, $nota3";
            }
}    
}
while($terminal != 3);

?>