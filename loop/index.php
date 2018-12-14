<?php
//for

echo '<h5>Ülesanne loop</h5>';

for($arv = 1; $arv <= 10; $arv++) {
    $varv = '';
    if ($arv % 2 == 0) {
        $varv = 'green';
    } else {
        $varv = 'red';
    }
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
}