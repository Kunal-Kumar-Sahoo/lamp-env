<?php
    //error_reporting(0);
    $host = 'mysql';
    $user = 'root';
    $pass = 'rootpassword';
    $connection = new mysqli($host, $user, $pass, 'iot_test');

    date_default_timezone_set('Asia/Kolkata');
?>