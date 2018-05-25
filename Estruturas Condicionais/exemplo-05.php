<form>
  <input type="text" name="nome">
  <input type="date" name="nascimento">
  <input type="submit" name="OK">
</form>
<?php
if (isset($_get)){

  foreach($_get as $key => $value){

    echo "Nome do campo: " . $key;
    echo "Valor do campo : " . $value;
    echo "<hr>";
  }


}



?>
