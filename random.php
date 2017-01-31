<?php
$los = "yes";
if (isset($_REQUEST["los"])) {
  $los = $_REQUEST["los"];
} else {
  $los = "no";
}

if ($los == "no") {
  # code...

  echo "Wylosuj ucznia do odpowiedzi";
  echo <<<KONIEC
  <form action="main.php?strona=random" method="POST">
  <select name="class">
    <option value="">2Ti</option>
    <option value="">3Ti</option>
  </select>
  <select name="group">
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
    <option>2Ti</option>
    <option>3Ti</option>
  </select>
  <select name="grupa">
    <option>Grupa_1</option>
    <option>Grupa_2</option>
  </select>
  <input type="text" name="numerek" placeholder="Wpisz szczęśliwy numerek" />
  <br />
  <input type="radio" name="TypLosowania" checked="checked" value="rand" />random
  <input type="radio" name="TypLosowania" value="mt_rand" />mt_random
  <input type="hidden" name="los" value="yes" />
  <br /><input type="submit" value="Send" />
  </form>
KONIEC;
$numerek = $_REQUEST["numerek"];
$TypLosowania = $_REQUEST["TypLosowania"];
$klasa = $_REQUEST["klasa"];
$grupa = $_REQUEST["grupa"];
$Student = RandomStudent($klasa, $grupa, $numerek, $TypLosowania);
echo ($Student);
}
else {
  echo "ta strona nie znaleziona";
}
function RandomStudent($class, $group, $number, $Type)
{
  if ($Type == "rand")
  {
      if ($class == "2ti")
      {
        if ($group == "Grupa_1")
        {
          $x = rand(1,15);
        }
        else if ($group == "Grupa_2")
        {
          $x = rand(16,30);
        }
        else {
          $x = "nica";
        }
      }
      else if($class == "3ti")
      {
        if ($group == "Grupa_1")
        {
          $x = rand(1,15);
        }
        else if ($group == "Grupa_2")
        {
        $x = rand(16,30);
        }
        else {
          $x = "nicb";
        }
      }
    return $x;
  }
  else if ($Type == "mt_rand")
  {
    if ($class == "2ti")
    {
      if ($group == "Grupa_1")
      {

      }
      else if ($group == "Grupa_2")
      {

      }

    }
    else if($class == "3ti")
    {
      if ($group == "Grupa_1")
      {

      }
      else if ($group == "Grupa_2")
      {

      }
    }
  }

}
?>
