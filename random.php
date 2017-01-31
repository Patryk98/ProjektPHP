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
  <select name="class">
    <option>2Ti</option>
    <option>3Ti</option>
  </select>
  <select name="group">
    <option>Grupa_1</option>
    <option>Grupa_2</option>
  </select>
  <input type="text" name="numerek" placeholder="Wpisz szczęśliwy numerek" value="" />
  <br />
  <input type="radio" name="Type" checked="checked" value="rand" />random
  <input type="radio" name="Type" value="mt_rand" />mt_random
  <input type="hidden" name="los" value="yes" />
  <br /><input type="submit" value="Send" />
  </form>
KONIEC;
$numerek = $_REQUEST["numerek"];
$Type = $_REQUEST["Type"];
$class = $_REQUEST["class"];
$group = $_REQUEST["group"];
$Student = RandomStudent($class, $group, $numerek, $Type);
echo ($Student);
}
else {
  echo "ta strona nie znaleziona";
}
function RandomStudent($class, $group, $numerek, $Type)
{
  if ($Type == "rand")
  {
      if ($class == "2ti")
      {
        if ($group == "Grupa_1")
        {
          $Student = rand(1,15);
        }
        else if ($group == "Grupa_2")
        {
          $Student = rand(16,30);
        }
      }
      else if($class == "3ti")
      {
        if ($group == "Grupa_1")
        {
          $Student = rand(1,15);
        }
        else if ($group == "Grupa_2")
        {
        $Student = rand(16,30);
        }
      }
    $Student = 20;
    return $Student;
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
