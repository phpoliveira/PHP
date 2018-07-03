<?php

function ola($texto){

  return "Olá $texto!" . "<br>";

}

echo ola("Paulo");
echo ola("Henrique");
echo ola("João");

echo "<br><br>";
//------------------------------------------------------------------------------

function oi($txt = "Mundo"){

  return "Olá $txt!" . "<br>";

}

echo oi("Paulo");
echo oi("Henrique");
echo oi();
?>
