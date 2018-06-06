<?php
$nomeCliente= "João da Silva";

echo $nomeCliente;

echo "<br>";

unset($nomeCliente); //Deleta informações da variavel

if (isset($nomeCliente)){ //Caso a variável tenha algum valor setado

  echo $nomeCliente;
}
echo "<br>";
$str='one | two | three | four';

print_r(explode($str, 1));
echo "<br>";
?>
