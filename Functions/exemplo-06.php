<?php
function soma (float ...$valores){

  return array_sum($valores);

}

echo soma(2, 2);
echo "<br>";
echo soma(20, 26);
echo "<br>";
echo soma(2.2, 5.7);
echo "<br>";

?>
