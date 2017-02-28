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
    $list = "Dziękuje za rejestrację w naszym serwisie. Aby potwierdzić rejestracje kliknij poniższy link
      http://localhost/ProjectPHP/main.php?strona=potwierdzenie
    W przeciwnym wpadku zignoruj ten mail"
    mail($mail, "witamy w serwisie RAJ", $list);
    echo "Na pocztę został wysłany link aktywacyjny";
  }
  else
  {
    echo "Użytkownik nie został wpisany do bazy";
  }

}
else
{
  echo "Brak połączenie";
}


?>
