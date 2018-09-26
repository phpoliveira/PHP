<?php
//Criar atributos e métodos no PHP
class carro{

  private $modelo;
  private $motor;
  private $ano;


//------------------Modelo------------------------------------------------------
  public function getModelo(){

    return $this->modelo;

  }

  public function setModelo($modelo){

    $this->modelo=$modelo;

  }
//------------------Motor-------------------------------------------------------
  public function getMotor():float{

    return $this->motor;

  }

  public function setMotor($motor){

    $this->motor=$motor;

  }
//------------------Ano---------------------------------------------------------
  public function getAno():int{

    return $this->ano;

  }

  public function setAno($ano){

    $this->ano=$ano;

  }
  public function exibir(){
    return array(
      "Modelo"=>$this->getModelo(),
      "Motor"=>$this->getMotor(),
      "Ano"=>$this->getAno()
    );
  }

}

$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

print_r($gol->exibir());
var_dump($gol->exibir());


?>
