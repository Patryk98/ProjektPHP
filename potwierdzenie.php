<?php
  $kod = $_REQUEST["kod"];
  require_once("connect_dane.php");
  $serwer = mysqli_connect($host, $user, $password, $baza);
  if ($serwer)
  {
    $wynik = $serwer -> query("UPDATE users SET status = 2 WHERE kod = '$kod';");
    if($wynik == 1)
    {
      echo "Aktywacja została pomyślnie zaktywowane";
    }
    else
    {

    }
  }
  else
  {
    echo "Brak połączenia z serwerem";
  }

?>
