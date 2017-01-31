<?php
$los = "no";
if (isset($_REQUEST["los"])) {
  $los = $_REQUEST["los"];
} else {
  $los = "no";
}

if ($los = "no") {
  # code...

  echo "Wylosuj ucznia do odpowiedzi";
  echo <<<KONIEC
  <form action="main.php?strona=random" method="POST">
  <select name="klasa">
    <option value="">2Ti</option>
    <option value="">3Ti</option>
  </select>
  <select name="grupa">
    <option value="">Grupa_1</option>
    <option value="">Grupa_2</option>
  </select>
  <input type="text" name="numerek" placeholder="Wpisz szczęśliwy numerek" value="" />
  <br />
  <input type="radio" name="TypLosowania" value="rand" />random
  <input type="radio" name="TypLosowania" value="mt_rand" />mt_random
  <input type="hidden" name="los" value="yes" />
  <br /><input type="submit" value="Send" />
  </form>
KONIEC;
}
else if ($los="yes") {
  # code...
  echo "Wylosuj ucznia do odpowiedzi";
  echo <<<KONIEC
  <form action="main.php?strona=random" method="POST">
  <select name="klasa">
    <option value="">2Ti</option>
    <option value="">3Ti</option>
  </select>
  <select name="grupa">
    <option value="">Grupa_1</option>
    <option value="">Grupa_2</option>
  </select>
  <input type="text" name="numerek" placeholder="Wpisz szczęśliwy numerek" value="" />
  <br />
  <input type="radio" name="TypLosowania" value="rand" />random
  <input type="radio" name="TypLosowania" value="mt_rand" />mt_random
  <input type="hidden" name="los" value="no" />
  <br /><input type="submit" value="Send" />
  </form>
KONIEC;
$Student = RandomStudent();
echo ($Student);
}
else {
  echo "ta strona nie znaleziona";
}
function RandomStudent()
{
  return 20;
}
?>
