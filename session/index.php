<?php
session_start();
require_once 'fnk.php';

if(!isset($_SESSION['user'])) {
    echo 'Tere tulemast, '.$_SESSION['user'].'!<br>';
    echo '<a href="acts/logout.php">Logi välja</a>';
}

$loginForm = htmlFromFile('login');
echo $loginForm;