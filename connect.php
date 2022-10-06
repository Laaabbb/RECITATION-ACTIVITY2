<?php
    if(isset($_POST['submit'])){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbName = $_POST['activity2'];
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
       
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        if ((mysqli_query($conn, $sql))) {
            echo "Connected";
        }  
        else {
            echo "Connection Error: " . $conn->error;
        }
        $conn->close();
    }