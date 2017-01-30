<<?php
  echo "Wylosuj ucznia do odpowiedzi";
  <form>
  <selected name="klasa">
    <option value="">2Ti</option>
    <<option value="">3Ti</option>
  </selected>
  <selected>
    <option value="">Grupa_1</option>
    <option value="">Grupa_2</option>
  </selected>
  <input type="text" name="numerek" placeholder="Wpisz szczęśliwy numerek" value="" />
  <br />
  <br /><input type="radio" name="TypLosowania" value="rand" />random
  <br /><input type="radio" name="TypLosowania" value="mt_rand" />random
  <br /><input type="submit" value="Send" />
  </form>
?>
