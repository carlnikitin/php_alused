<?php

//andmed html vormist
$username = $_GET['uname'];
$password = $_GET['upass'];

//andmed HTML vormi poolt
$username = $_GET['uname'];
$password = $_GET['upass'];

//loome ühenduse andmebaasiga
$ikt = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);

//küsime kasutaja andmete olemasolu andmebaasis
$sql = 'SELECT * FROM user WHERE username="'.$username.'"AND $password = "'.md5($password).'"';

//loome kasutaja sessiooni, kui ta andmebaasis olemas
if($users !== false) {
    session_start();
    $_SESSION['user'] = $users[0]['username'];
    header('Location: ../index.php');
}
