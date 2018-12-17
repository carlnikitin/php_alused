<?php
// funktsioonid

$life = 42;

function meaningOfLife() {
    global $life;
    print("The meaning of life is $life<br>");
}

meaningOfLife();

?>