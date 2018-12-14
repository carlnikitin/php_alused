<?php
//while

$arv = 1234;

while ($arv != 0) {
    $number = $arv % 10;
    echo 'Number = '.$number.'<br>';
    $arv = $arv / 10;
    echo 'Arv float = '.$arv.'<br>';
    settype($arv, 'int');
    echo 'Arv int = '.$arv.'<br>';
    $summa = $summa + $number;
    echo '<hr>';
}

echo 'Arvu numbrite summa = '.$summa.'<br>';