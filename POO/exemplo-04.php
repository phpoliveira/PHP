<?php

class Endereco{

  private $Logradouro;
  private $Numero;
  private $Cidade;

  public function __construct($a, $b, $c){

    $this-> Logradouro=$a;
    $this-> Numero=$b;
    $this-> Cidade=$c;


  }
  public function __destruct() {
    var_dump("DESTRUIR");
  }

  public function __toString(){

    return $this->Logradouro . " , " . $this->Numero . " - " . $this->Cidade;

  }

}


$meuEndereco = new Endereco("Rua Mario Vaz", "76", "São Paulo");

//var_dump($meuEndereco);
//unset($meuEndereco);

echo $meuEndereco;


?>
