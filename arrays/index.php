<?php
// arrays

$kasutajad = array(
    array(
        'alice',
        'alice',
        'Liddle'
    ),
    array (
        'bob',
        'bob',
        'Builder'
    )
);

echo '<hr>';
foreach ($kasutajad as $kasutaja) {
    foreach ($kasutaja as $element) {
        echo $element.'<br>';
    }
    echo '<hr>';
}