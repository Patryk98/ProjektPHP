<!DOCTYPE html>
<html lang="pl">
<head>
<title>STRONA z elementami HTML5</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="styles/styl.css" />
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src ="functions/something.js"></script>
</head>
<body onload="$(document).ready(function(){LoadImage()});">
<section id="kontener">
<header id="naglowek"><div id="head1"><h5>Projekt</h5>
Przydatne walidatory: <a href="http://html5.validator.nu">http://html5.validator.nu</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://validator.w3.org">http://validator.w3.org</a>
</div>
<div id="head2"></div>
<div style="clear:both;">

</header>
<nav id="menu">
<a href="main.php?strona=start">Strona główna</a><br /><br />
<a href="main.php?strona=gra">Gry</a> <br /><br />
<a href="main.php?strona=random">Losowanie</a><br /><br />
<a href="main.php?strona=users">Zapytanka</a><br /><br />
<a href="main.php?strona=logowanie">logoj</a><br /><br />
<a href="main.php?strona=rejestracja">zarejestrój</a><br /><br />
</nav>
<section id="main">
<?php
srand(time());
mt_srand(time());
if(isset($_REQUEST["strona"]))$strona = $_REQUEST["strona"];
else $strona = "start";
if(file_exists("$strona.php"))
{
include("$strona.php");
}
else
{
echo "Nieokreślony błąd strona niedostępna";
}
?>
</section>
<aside id="boczny"></aside>
<footer id="stopka"></footer>
</div>
</body>
</html>
