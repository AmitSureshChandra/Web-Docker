<?php

    $host = 'db'; // service name from docker
    $user = 'devuser';
    $password = 'devroot';
    $db = "test_db";

    $conn = new mysqli($host,$user,$password,$db);

    if($conn->connect_error){
        die('connection failed');
    }

    echo "Connected successfully"

?>