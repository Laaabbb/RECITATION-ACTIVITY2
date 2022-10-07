<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbName = 'activity2';

    // Create connection
    $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    // Check Connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }