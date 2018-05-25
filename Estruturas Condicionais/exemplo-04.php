<?php

$meses = array(
  "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
);

/*foreach ($meses as $mes) {
  echo "O mês é ". $mes . "<br>";
}*/
foreach ($meses as $index => $mes) {
  echo "O Índice é " . $index . "<br>";
  echo "O mês é " . $mes . "<br><br>";
}
?>
