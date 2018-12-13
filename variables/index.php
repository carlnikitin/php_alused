<?php
/**
 * Created by PhpStorm.
 * User: carl.nikitin
 * Date: 13.12.2018
 * Time: 13:08
 */

//muutujate defineerimine
$taisArv = 3;
$reaalArv = 3.3;
$sone = '3';
$toevaartusTrue = true;
$toevaartusFalse = false;

//väljastame muutujate väärtused
echo 'Täisarv '. $taisArv.'<br>';
echo 'Reaalarv '. $realArv.'<br>';
echo 'Sõne '. $sone.'<br>';
echo 'Tõeväärtus true '. $toevaartusTrue.'<br>';
echo 'Tõeväärtus false '. $toevaartusFalse.'<br>';
echo '<hr>';

//tüübi kontroll
echo gettype($sone);
echo '<br>';
$summa = $sone + $sone;
echo 'Summa = '.$summa.'<br>';