<?php

$frutas = array("Laranja", "Melancia", "Banana");

print_r ($frutas);
// Quando há somente uma dimensão chama-se vetor e quando há mais dimensões é chamado array.


echo "<br><br>";
// Exemplo de Array bidimensional
$carros [0][0] = "GM";
$carros [0][1] = "Cobalt";
$carros [0][2] = "Onix";
$carros [0][3] = "Corsa";
$carros [0][4] = "Camaro";

$carros [1][0] = "Ford";
$carros [1][1] = "Fusion";
$carros [1][2] = "Eco Sport";
$carros [1][3] = "Fiesta";
$carros [1][4] = "Focus";

print_r($carros [1][1]);

echo end ($carros[1]);

echo "<br><br>";
//Exemplo de array e tratamento

$pessoas = array();

array_push($pessoas, array(
  'nome'=>'Paulo',
  'idade'=>30
));
echo "<br>";
array_push($pessoas, array(
  'nome'=>'Levi',
  'idade'=>57
));

print_r($pessoas [0]['nome']);

?>
