<?php
  $kod = $_REQUEST["kod"];
  require_once("connect_dane.php");
  $serwer = mysqli_connect($host, $user, $password, $baza);
  if ($serwer)
  {
    $wynik = $serwer -> query("SELECT id_uzytkownika FROM users WHERE status = 1 AND kod = '$kod';");
  }
  else
  {

  }

?>
