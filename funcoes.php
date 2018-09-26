<?php

/*preg_match('/(a)(b)*(c)/', 'ac', $matches);
var_dump($matches);


//------------------------------------------------------------------------------



echo "<br>";


$cpf="228.551.688-64";
if(preg_match('/[0-9]/', $cpf)){

  echo "Tem Somente números";

}else{

  echo "Erro" . "<br><br>";

}*/

//$Pri_Digito=0;
//$Seg_Digito=0;

$cpf="22855168854";
$cpf=preg_replace('/[^0-9]/', '', $cpf);
$cpf=str_pad($cpf, 11, '0', STR_PAD_LEFT);

if (strlen($cpf) !=11){

  return false;

}else if($cpf == '00000000000' ||
		     $cpf == '11111111111' ||
      	 $cpf == '22222222222' ||
      	 $cpf == '33333333333' ||
      	 $cpf == '44444444444' ||
      	 $cpf == '55555555555' ||
      	 $cpf == '66666666666' ||
      	 $cpf == '77777777777' ||
      	 $cpf == '88888888888' ||
      	 $cpf == '99999999999') {

         return false;

}



for($t=9; $t<11; $t++){

  for($d=0, $c=0; $c < $t; $c++){
    $d +=  $cpf{$c} * (($t + 1) - $c);
  }
  $d = ((10*$d) % 11 ) % 10;
    if ($cpf{$c} != $d) {
      return false;
    }

}
return true;


// Padrão de configuração de CPF
/*for($i=0, $x=10; $i<=8; $i++, $x--){

  $Pri_Digito += $x * $cpf{$i};

}
for($i=0, $x=11; $i<=9; $i++, $x--){

  $Seg_Digito += $cpf{$i} * $x;

}
$Soma_Pri_Digito = (($Pri_Digito%11) < 2 ) ? 0 : 11-($Pri_Digito%11);
$Soma_Seg_Digito = (($Seg_Digito%11) < 2 ) ? 0 : 11-($Seg_Digito%11);

echo $Soma_Pri_Digito . $Soma_Seg_Digito;
*/

?>
