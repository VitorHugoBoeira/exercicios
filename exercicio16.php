<?php

$nota1 = readline("Digite a primeira nota: ");
$nota2 = readline("Digite a segunda nota: ");

$media = ($nota1 + $nota2) / 2;

if ($media > 7){
	echo "Aluno Aprovado!\n";
	echo "Nota do aluno:$media";
}
if ($media >= 5 && $media <= 6.9){
	echo "Aluno está de recuperação!\n";
	echo "Nota do aluno:$media";
}
if ($media < 5){
	echo "Aluno reprovado!\n";
	echo "Nota do aluno:$media";
}

?>