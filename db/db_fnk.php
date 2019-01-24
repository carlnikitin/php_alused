<?php
function connect_db($hostName, $dbUser, $dbPass, $dbName) {
    $conn = mysqli-connect($hostName, $dbUser, $dbPass, $dbName);

    if(!$conn) {
        echo 'Unable to connect to MySQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }

    return $conn;
}

function query($sql, $conn) {
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        echo 'Problem with <b>'.$sql.'</b><br>';
        exit;
    }

    return $result;
}