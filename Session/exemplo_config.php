<?php

//exemplo utilizando um outro arquivo config.php sendo executado através do require_once.
require_once("config.php");

$_SESSION["nome"] = "Paulo";

echo $_SESSION['nome'];

?>
