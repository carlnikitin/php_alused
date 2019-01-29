<?php

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
echo date('d.m.Y G:i' , time());


//Kuva tänane eestikeelne nädalapäev, N: kolmapäev
$date = date('d.m.Y G:i' , time());
$days = ['esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede','laupäev', 'pühapäev'];
$day = date('w', strtotime($date));
$date = 'Täna on'." $days[$day].";
echo $date;


//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');

$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//väljastamine
echo 'Täna on '.$paev.'. '.$kuu.' '.$aasta.', '.$days[$day].'.';


//Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!
$jaanipaev = mktime(0,0,0,6,24,2019);
$tanapaev = time();
$jaanipaevani = $jaanipaev - $tanapaev;
echo 'Jaanipäevani on jäänud '. floor($jaanipaevani/60/60/24).' päeva.';

?>