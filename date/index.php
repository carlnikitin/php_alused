<?php

//aja loomine
echo time(); //1361551056

//Kasutajasõbraliku kuupäeva kuvamine
echo date('d.m.Y G:i' , time());

//Ajavöönd
date_default_timezone_set('Europe/Tallinn');

//Pika kuupäeva eestistamine
echo date('d.F.Y');

//Kuna kuu kuvatakse inglis keeles, muudame selle eesti keelseks
//kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;	//22.veebruar2013



?>