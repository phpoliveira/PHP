<?php

class Pessoa{

  public $nome; //atributo

  public function falar(){ //metodo
    return "O meu nome é ". $this->nome;    // Quando a variável estiver fora do metodo é necessário a sintaxe $this->nome

  }
}

$paulo = new Pessoa();
$paulo->nome = "Paulo Henrique Santos Oliveira";
echo $paulo->falar();

?>
