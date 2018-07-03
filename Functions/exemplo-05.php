<?php

$pessoa = array(
  'Nome' => 'Paulo Henrique' ,
  'Idade' => 20
);
//Obs enquanto estiver com & a varável vale para fora do FOR se não tiver & as alterações ficam válidas somente para dentro do FOR
foreach ($pessoa as &$value) {
  if(gettype($value) === 'integer') $value += 10;
  echo $value . "<br>";
}
echo "<br>";
print_r($pessoa);


?>
