<?php
// Diferença das "" e '' interpolação de variaveis.

$nome = "Paulo Henrique";

$nome2 = "Santos Oliveira";

var_dump($nome, $nome2);
echo "<br>";

echo $nome ." ". $nome2;
echo "<br>";
echo "Nome: $nome";
echo "<br>";
echo 'Nome: $nome';
echo "<br>";
//---------------------------------------Maisculas------------------------------

echo strtoupper($nome ." ". $nome2);
echo "<br>";
echo strtolower($nome ." ". $nome2);
echo "<br>";
//-------------------------------Somente a primeira maíuscula-------------------

echo ucwords($nome ." ". $nome2);
echo "<br>";
echo ucfirst($nome ." ". $nome2);
echo "<br>";
//--------------------------------Substituindo Caracteres-----------------------
$empresa = "Porto Seguro";

$empresa = srt_replace("o", "0", $empresa);

echo $empresa;

?>
