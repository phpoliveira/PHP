<?php
$idadePessoa=18;


$idadeCriança=12;
$idadeAdolescente=18;
$idadeIdoso=60;

if($idadePessoa <= 12){

  echo "Você é uma Criança";
}elseif ($idadePessoa < $idadeAdolescente) {
  echo "Você é Adolescente";
}elseif ($idadePessoa >= $idadeAdolescente && $idadePessoa < $idadeIdoso) {
  echo "Você é um Adulto";
}
else {
  echo "Você é um Idoso";
}
echo "<br>";
echo "<br>";
// Outra forma de utilizar o um IF = ? ELSE= :
echo ($idadePessoa >= $idadeAdolescente)? "Maior de Idade":"Menor de Idade";

?>
