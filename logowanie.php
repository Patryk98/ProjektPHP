<?php session_start();
if(isset($_SESSION["zalogowany"]))$zalogowany = $_SESSION["zalogowany"];
else $zalogowany = "no";
//jeżeli zalogowany
if(isset($_REQUEST["test"]))$test = $_REQUEST["test"];
else {
  $test = "nie";
}
if ($test == "tak") {
  $zalogowany = zapytajBaze();
}
if ($zalogowany == "yes")
{
  dzialaj();
}
//nie zalogowany
else if($zalogowany == "no")
{
	formularzLogowania();
}
//złe hasło lub login
else if($zalogowany == "error")
{
	infoError("Nieprawidłowy login lub hasło");
	formularzLogowania();
}
//strona nie istnieje
else
{
	infoError("strona niedostępna spróbuj ponownie za chwile" );
}

function dzialaj()
{
	echo "Zostałeś poprawnie zalogowany";
}
function infoError($string)
{
	echo($string);
}
function formularzLogowania()
{
	echo <<<END
	<form action="main.php?strona=logowanie" method="POST">
	Login: &nbsp; <input type="text" name="login"  value=""/> <br /> <br />
	Hasło: &nbsp; <input type="password" name="haslo" value=""/><br /><br />
  <input type="hidden" name="test" value="tak"/>
  <input type="submit" value="wyslij"/>
	</form>
END;
}
function zapytajBaze()
{
  $login = $_REQUEST["login"];
  $haslo = md5($_REQUEST["haslo"]);
  require_once("connect_dane.php");
  $zapytanie = "SELECT id_uzytkownika, login, haslo FROM users";
  $connection = mysqli_connect($host, $user, $password, $baza);
  if ($connection) {
    $wynik = $connection -> query($zapytanie);
    if ($wynik) {
      $ile = mysqli_num_rows($wynik);
      if ($ile >= 0) {
        $log = "error";
        for($i=1; $i<= $ile; $i++)
        {
          $wiersz = mysqli_fetch_assoc($wynik);
          $id = $wiersz["id_uzytkownika"];
          $name = $wiersz["login"];
          $passwd = $wiersz["haslo"];
          if ($login == $name && $haslo == $passwd)
          {
            $log = "yes";
          }
        }
      }
    }
  }
  return $log;
}
?>
