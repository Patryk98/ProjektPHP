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
  if($class == "2Ti"  && $group == "Grupa_1")
  	{

  		$g1_2ti = array(3,4,6,7,11,15,16,18,19,20,22,24,25,28,29,32,33);
  		do {
  		  $i = rand(0,count($g1_2ti));
        $x = $g1_2ti;
  		} while ($x==$number);

  	}
  	if($class == "2Ti"  && $group == "Grupa_2")
  	{
  		$g2_2ti = array(0,1,5,8,9,10,12,13,14,17,21,23,26,27,30,34,35);
      do {
  		  $i = rand(0,count($g2_2ti));
        $x = $g1_2ti;
  		} while ($x==$number);
  	}

    if($class == "3Ti"  && $group == "Grupa_1")
  	{
      do
      {
  		$x = rand(1,15);
  		}
      while($x==$number);

  	}
  	if($class == "3Ti"  && $group == "Grupa_2")
  	{
      do
      {
  		$x = rand(16,29);
    }
    while($x==$number);
  	}
  	return $x;
}
?>
