<?php
// arrays

$kasutajad = array(
    array(
        'alice',
        'alice',
        'Liddle',
        'female'
    ),
    array (
        'bob',
        'bob',
        'Builder',
        'male'
    )
);

echo '<hr>';
foreach ($kasutajad as $kasutaja) {
    for ($i = 0; $i < count($kasutaja); $i++) {
        if ($kasutaja[3] == 'female') {
            echo '<div style="color: red">';
        } else {
            echo '<div style="color: blue">';
        }

        echo $kasutaja[$i] . '</div>';
    }
    echo '<hr>';
}