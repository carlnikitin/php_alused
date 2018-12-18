<?php

function tabel($txt1, $txt2, $txt3, $txt4) {
    echo '<table>';
        echo '<tr>';
            for ($i = 1; $i <= 4; $i++) {
                echo '<td>';
                    echo $ {'txt'.$i};
                echo '</td>';
            }
    echo '</tr>';
    echo '</table>';
}

tabel('see', 'on', 'üksl', 'tabel');