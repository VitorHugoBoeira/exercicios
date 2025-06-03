<?PHP

$numero = readline("digite o número que deseja fatorar: ");
$i = ($numero - 1);
Do{
	$numero = $numero * $i;
	$i--;
}
While ($i!==1);
echo "$numero";
?>