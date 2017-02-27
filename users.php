<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Skrypt tworzący tabele</title>
  <meta charset="utf-8"/>
</head>
<body>
  <?php
    require_once("connect_dane.php");
    $baza = mysqli_connect($host,$user,$password,$baza);
    if ($baza)
    {
      $wynik = $baza -> query("CREATE TABLE users (
        id_uzytkownika INT NOT NULL PRIMARY KEY auto_increment,
        imie VARCHAR(20) NOT NULL,
        nazwisko VARCHAR(30) NOT NULL,
        login VARCHAR(15) NOT NULL,
        mail VARCHAR(50) NOT NULL,
        haslo VARCHAR(32) NOT NULL,
        kod VARCHAR(32) NOT NULL,
        status TINYINT UNSIGNED NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci");
        mysqli_close($baza);
        if ($wynik)
        {
          echo "Tabela: ".$tabela." została poprawnie ustworzona!";
        }
        else
        {
          echo "tabela nie zosała utworzona";
        }
    }
    else {
      echo "<h3>Nie można nawiązać połączenia z bazą lub hostem</h3>";
    }
   ?>
 </body>
 </head>
