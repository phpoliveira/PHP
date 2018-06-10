<?php

$pessoa = array(
  'Nome' => 'Paulo Henrique' ,
  'Idade' => 20
);
//Obs enquanto estiver com & na frente da variável ela vale para
foreach ($pessoa as $value) {
  if(gettype($value) === 'integer') $value += 10;
  echo $value;
}

print_r($pessoa);


?>
