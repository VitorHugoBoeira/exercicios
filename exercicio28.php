<?php

do {

	$usuario = readline("Digite um nome de usuário: \n");
	$senha = readline("Digite uma senha: ");
	if($usuario == $senha){
		echo "erro o usuario nao pode ser igual a senha!\n";
	}
	else {
		echo "seu usuario foi criado!";
	}
}
while($usuario == $senha)

?>