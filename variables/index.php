<?php
// matemaatilised võrdlusoperaatorid

$arv1 = 42;
$arv2 = 11;

echo $arv1.'+'.$arv2.'='.($arv1 + $arv2).'<br>';
echo $arv1.'-'.$arv2.'='.($arv1 - $arv2).'<br>';
echo $arv1.'*'.$arv2.'='.($arv1 * $arv2).'<br>';
echo $arv1.'/'.$arv2.'='.($arv1 / $arv2).'<br>';
echo $arv1.'%'.$arv2.'='.($arv1 % $arv2).'<br>';

echo'<hr>';

echo $arv1.' == '.$arv2.' on '.($arv1 == $arv2).'<br>';
echo $arv1.' != '.$arv2.' on '.($arv1 != $arv2).'<br>';
echo $arv1.' <= '.$arv2.' on '.($arv1 <= $arv2).'<br>';
echo $arv1.' >= '.$arv2.' on '.($arv1 >= $arv2).'<br>';
echo $arv1.' < '.$arv2.' on '.($arv1 < $arv2).'<br>';
echo $arv1.' > '.$arv2.' on '.($arv1 > $arv2).'<br>';

