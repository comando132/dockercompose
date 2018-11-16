<?php
$servername = "192.168.33.22";
$username = "root";
$password = "12345678";

try {
    $conn = new PDO("mysql:host=$servername;dbname=curso", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }