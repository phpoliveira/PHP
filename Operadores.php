<?php
/*
Um operador é algo que recebe um ou mais valores (ou expressões, no jargão de programação) e que devolve outro valor (e por isso os próprios construtores se tormam expressões).

Operadores podem ser agrupados segundo o número de valores que aceitam. Operadores unários recebem um único valor, por exemplo ! (o operador lógico de negação) ou ++ (o operador de incremento). Operadores binários aceitam dois valores, como os operadores aritméticos + (soma) e - (subtração), além da maioria dos operadores PHP dessa categoria. Finalmente há um único operador ternário, ? :, que aceita três valores; normalmente conhecido simplesmente como "o operador ternário" (embora um nome melhor fosse operador condicional).

A lista completa dos operadores no PHP está na seção sobre Precedência de Operadores. Essa seção também explica precedência e combinações, que governam exatamente como expressões contendo vários operadores são avaliados.

*/
$var1= 10;

$var1.=10;

//concatenando informações
echo $var1 . "<br>";


$var2=20;

$var2+=10;
//Efetua soma através dos operadores aritméticos
echo $var2 . "<br>";


var_dump($var2);
echo "<br>";
//--------------------------------------Exemplo de operadores--------------------------------------------

$nome = "Paulo Henrique";
$sobrenome = "Santos Oliveira";

echo $nome . $sobrenome;

?>
