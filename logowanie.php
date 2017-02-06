<?php session_start();
if(isset($_SESSION["zalogowany"]))$zalogowany = $_SESSION["zalogowany"];
else $zalogowany = "no";
//jeżeli zalogowany
if ($zalogowany == "yes")
{

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
	formularzLogowania;
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
	<form action="main.php" method="POST">
	Login: &nbsp; <input type="text" name="login"  value=""/> <br /> <br />
	Hasło: &nbsp; <input type="password" name="haslo" value=""/><br /><br />
  <input type="submit" value="wyslij"/>
	</form>
END;
}

?>
