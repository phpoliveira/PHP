<?php
function soma (float ...$valores):string{
//É possível determinar o ti
  return array_sum($valores);

}

var_dump(soma(2, 2));
echo "<br>";
echo soma(20, 26);
echo "<br>";
echo soma(2.2, 5.7);
echo "<br>";

?>
