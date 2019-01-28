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


//Muu soovitud kuupäeva genereerimine
//Kasutame mktime
mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg)


$sp = mktime(0,0,0,10,29,1969);
echo date('d.m.Y', $sp);	//29.10.1969


//Tehted kuupäevadega
echo date('d.m.Y G:i' , time()+60);		//1min pärast
echo date('d.m.Y G:i' , time()+60*60);		//1h pärast
echo date('d.m.Y G:i' , time()+60*60*24);	//24h pärast


//Näiteks 27 aastat enne
$sp = mktime(0,0,0,10,29,1969-27);
echo date('d.m.Y', $sp);			//29.10.1942


//Kuupäeva valideerimine
if(checkdate(12,32,2013)) {
    echo('Kuupäev korras!');
} else {
    echo ('Kuupäev on valesti sisestatud');
}


?>