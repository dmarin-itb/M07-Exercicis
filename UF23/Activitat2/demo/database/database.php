<?php
    $servername = "sql11.freemysqlhosting.net";
    $database = "sql11698951";
    $username = "sql11698951";
    $password = "L93CaW2g5Z";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>