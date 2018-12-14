<?php
//for

?>
<style>
    table, tr, td {
        width:200px;
        border: 1px solid black;
        border-collapse:collapse;
    }
    td {
        width:20px;
        text-align: center;
    }
</style>

<?php
echo'<h5>Ülesanne 2</h5>';

echo '<table>';
    echo '<tr>';
    for ($arv1 = 0; $arv1 <= 10; $arv1++) {
        $txt = ($arv1 == 0) ? '&nbsp;' : $arv1;
        echo '<th style="background: deepskyblue">'.$txt.'</th>';
    }
    echo '</tr>';
    for ($arv1 =1; $arv1 <= 10; $arv1++) {
        echo '<tr>';
            echo '<th style="background: coral">'.$arv1.'</th>';
            for ($arv2 = 1; $arv2 <= 10; $arv2++) {
                echo '<td>';
                echo ($arv1 * $arv2);
                echo '</td>';
            }
        echo '</tr>';
    }

echo '</table>';