<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_pendaftaran';

    $db = mysqli_connect($hostname, $username, $password, $database);

    if (!$db) {
        echo 'Error : ' .mysqli_connect_error($database);
    }
?>