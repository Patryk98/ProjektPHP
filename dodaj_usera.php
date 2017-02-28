<?php
$imie = $_REQUEST["imie"];
$nazwisko = $_REQUEST["nazwisko"];
$login = $_REQUEST["login"];
$mail = $_REQUEST["mail"];
$haslo = $_REQUEST["haslo"];
require_once("connect_dane.php");
$haslo = md5($haslo);

$status = 1;
srand(time());
$kod = uniqid(rand());

$server = mysqli_connect($host, $user, $password, $baza);

if ($server)
{
  $wynik = $server -> query("INSERT INTO users (imie, nazwisko, login, mail, haslo, kod, status) VALUES ('$imie', '$nazwisko', '$login', '$mail', '$haslo', '$kod', 1);");
  if ($wynik)
  {
    echo "Użytkownik został dodany";
  } else
  {
    echo "Użytkownik nie został wpisany do bazy";
  }

}
else
{
  echo "Brak połączenie";
}


?>
