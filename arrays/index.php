<?php
// arrays

$kasutajad = array(
    'alice',
    'bob',
    'lucy'
);

for ($i = 0; $i < count($kasutajad); $i++) {
    echo $i.' - '.$kasutajad[$i].'<br>';
}