<?php

//Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi.
//Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
//Näiteks: sisend–>mARiO; väljund–>Tere, Mario!
$mario_nimi = 'mARIO';
echo 'Tere, ' . ucfirst(strtolower($mario_nimi)) . '!';
echo '<br>';


//Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada.
//Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
//Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.
$stalker = 'stalker';
$stalker_array = (str_split($stalker));
echo strtoupper(implode('.', $stalker_array));
echo '<br>';

?>
<!--Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik *** -->

<html>

<form method="get">
  <input name="message" type="text">
  <button type="submit">Saada</button>
</form>

<br>

</html>

<?php

$message = $_GET['message'];
$roppused = array('loll', 'mölakas', 'jobu');
$tarnid = '****';
echo str_replace($roppused, $tarnid, $message) . '<br>';


//Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee.
//Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
//Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee
$kasutaja_eesnimi = 'Mari';
$kasutaja_perenimi = 'Maasikas';
echo str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'u', 'o'), mb_strtolower($kasutaja_eesnimi . '.' . $kasutaja_perenimi . '@hkhk.edu.ee'));


?>