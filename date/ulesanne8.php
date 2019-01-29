<?php

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
echo date('d.m.Y G:i' , time());
echo '<br>';


//Kuva tänane eestikeelne nädalapäev, N: kolmapäev
$date = date('d.m.Y G:i' , time());
$days = ['esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede','laupäev', 'pühapäev'];
$day = date('w', strtotime($date));
$date = 'Täna on'." $days[$day].";
echo $date;
echo '<br>';


//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');

$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//väljastamine
echo 'Täna on '.$paev.'. '.$kuu.' '.$aasta.', '.$days[$day].'.';
echo '<br>';


//Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!
$jaanipaev = mktime(0,0,0,6,24,2019);
$tanapaev = time();
$jaanipaevani = $jaanipaev - $tanapaev;
echo 'Jaanipäevani on jäänud '. floor($jaanipaevani/60/60/24).' päeva.';
echo '<br>';


//Minu sünnipäev on 06.11.1980! Leia kumb on meist vanem. Kuva mõlema sünnikuupäevad ning vahe aastates.
$m_metsheina_synnipaev = date_create("1980-11-06");
$minu_synnipaev = date_create("1990-02-02");
$difference = $m_metsheina_synnipaev->diff($minu_synnipaev);
echo 'Sünnipäevade erinevus: '.$difference->y.' years, '
    .$difference->m.' months, '
    .$difference->d.' days';
echo '<br>';


//Koosta kood, mis tervitab sind vastavalt ajale. N: 8:00+ “Tere hommikust!”, 13:00+ “Tere päevast!” ja 17:00+ “Tere õhtust!”
$some_time = time();
echo $hours_of_day;
function greeting($time) {
    $hours_of_day = date('H', $time);
    if ($hours_of_day < 13) {
        echo 'tere hommikust';
    } else if ($hours_of_day < 18) {
        echo 'tere päevast';
    } else {
        echo 'tere õhtust';
    }
}


?>