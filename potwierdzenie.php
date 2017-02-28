<?php
  $kod = $_REQUEST["kod"];
  require_once("connect_dane.php");
  $serwer = mysqli_connect($host, $user, $password, $baza);
  if ($serwer)
  {
    $wynik = $serwer -> query("UPDATE users SET status = 2 WHERE kod = '$kod';");
    mysqli_close($serwer);
    if($wynik)
    {
      echo "Aktywacja została pomyślnie zaktywowane";
    }
    else
    {
      echo "Nie zdąrzyłeś się zarejestrować. Spróbuj ponownie później";
    }
  }
  else
  {
    echo "Brak połączenia z serwerem";
  }

?>
