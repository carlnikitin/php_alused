<?php
//for
header('Refresh: 1');
?>
<style>
    table, tr, td {
        width:110px;
        border: 1px solid black;
        border-collapse:collapse;
    }
</style>

<?php
echo'<h5>Ülesanne 2</h5>';

echo '<table>';
    for($reaNumber = 1; $reaNumber <= 5; $reaNumber++) {
        echo '<tr>';

            for ($veeruNumber =1; $veeruNumber <= 5; $veeruNumber++) {
                $varv = '#';
                for ($kord = 1; $kord <= 6; $kord++) {
                    $varv = $varv.dechex(rand(0, 15));
                }
                echo '<td style="background: ' . $varv . '">&nbsp;</td>';
            }
        echo '</tr>';
    }

echo '</table';