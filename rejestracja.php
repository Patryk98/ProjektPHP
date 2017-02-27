<!DOCTYPE html>
<html lang="pl">
<head>
  <title>rejestracja</title>
  <meta charset="utf-8"/>
</head>
<body>
  <p>Formularz rejestracji nowego użytkownika</p>
  <?php
echo <<<KONIEC
  <form action="main.php?strona=dodaj_usera" method="post">
  imie: &nbsp <input type="text" name="imie" value=""/><br />
  nazwisko: &nbsp <input type="text" name="nazwisko" value=""/><br />
  login: &nbsp <input type="text" name="login" value=""/><br />
  mail: &nbsp <input type="email" name="mail" value=""/><br />
  haslo: &nbsp <input type="password" name="haslo" value=""/><br />
  <input type="submit" value="jebnij"/>

  </form>
KONIEC;
   ?>
</body>
</html>
