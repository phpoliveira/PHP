<?php
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

echo json_encode($pessoas);
echo "<br><br>";
//fazendo o processo inverso

$json = '[{"nome":"Paulo","idade":30},{"nome":"Levi","idade":57}]';

$data = json_decode($json, true);

var_dump($data);
?>
