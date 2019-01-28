<?php

//aja loomine
echo time(); //1361551056

//Kasutajasõbraliku kuupäeva kuvamine
echo date('d.m.Y G:i' , time());

//Ajavöönd
date_default_timezone_set('Europe/Tallinn');

//Pika kuupäeva eestistamine
echo date('d.F.Y');

?>