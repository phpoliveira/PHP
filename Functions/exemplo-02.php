<?php

function ola($texto){

  return "Olá $texto!";

}

echo ola("Paulo");
echo "<br>";
echo ola("Henrique");
echo "<br>";
echo ola("João");
echo "<br>";
?>
//------------------------------------------------------------------------------
<?php

echo "<br>";
function oi($txt = "Mundo"){

  return "Olá $txt!";

}

echo oi("Paulo");
echo "<br>";
echo oi("Henrique");
echo "<br>";
echo oi();
?>
