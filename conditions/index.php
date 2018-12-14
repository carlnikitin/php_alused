<?php
// tingimuslaused
?>
<style>
    div {
        width: 100px;
        height: 100px;
        border-radius: 50px;
        border: 1px solid black;
        }
</style>

<?php

echo '<h5>Valgusfoor</h5>';
$aktiivne = 'roheline';
switch ($aktiivne) {
    case 'punane':
    echo '<div style="background: red"></div>';
    echo '<div></div>';
