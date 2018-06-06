<?php
require_once("config.php");
//Caminho em que a sessão está sendo salva
echo session_save_path();
echo "<br>";

// Status da sessão, trantando com Switch
var_dump(session_status());
echo "<br>";
    switch (session_status()) {
      case PHP_SESSION_DISABLED :
        echo "As Sessões estão Desabilitadas";
        break;
      case PHP_SESSION_NONE :
        echo "As Sessões estão Habilitadas, Mas nenhuma Existi!";
        break;
      case PHP_SESSION_ACTIVE :
        echo "As Sessões estão Habilitadas, e uma Existi!";
        break;
    }

?>
