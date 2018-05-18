<?php
$a = 10;

$b = 11;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump($a = $b);//atribuição
echo "<br>";
var_dump($a == $b);//comparação
echo "<br>";
var_dump($a === $b);//comparação, quando precisa de identico.
echo "<br>";
var_dump($a != $b);//Diferente
echo "<br>";
var_dump($a !== $b);//Diferente

// Spaceship
echo "<br>";
var_dump($a <=> $b);


?>
