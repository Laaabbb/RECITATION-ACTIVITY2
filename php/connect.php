<?php
    $servername = "127.0.0.1";
    $dBusername = "root";
    $dBpassword = "";
    $dbName = "activity2";

    // Create connection
    $conn = mysqli_connect($servername, $dBusername, $dBpassword, $dbName);

    // Check Connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    