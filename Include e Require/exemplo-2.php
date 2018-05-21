<?php
//include "exemplo-1.php";
require_once "exemplo-1.php";//Caso você utilize o require duas vezes para chamar o mesmo arquivos ocorrerá erro de duplicidade, sendo que o o require_once executa uma vez só e esse erro não ocorre.

$resultado = somar(500, 100);

echo $resultado;

?>
