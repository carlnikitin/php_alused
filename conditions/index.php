<?php
// tingimuslaused

/*
 * if(tingimuslause) {
 *      tegevused, mis toimivad, kui
 *      tingimus kehtib
 * } else {
 *      kui tingimus ei kehti
 * }
 */

echo '<h5>Ülesanne 1</h5>';
$arv = rand(0, 100);
if($arv % 2 == 0) {
    echo '<div style="color: green">' . $arv . '</div>';
} else {
    echo '<div style="color: red">' . $arv . '</div>';
}