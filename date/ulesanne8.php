<?php

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
echo date('d.m.Y G:i' , time());


//Kuva tänane eestikeelne nädalapäev, N: kolmapäev
$date = date('d.m.Y G:i' , time());
$days = ['esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede','laupäev', 'pühapäev'];
$day = date('w', strtotime($date));
$date = 'Täna on'." $days[$day].";
echo $date;

?>