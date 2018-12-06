<?php
$servername = "sql167.main-hosting.eu.";
$username = "u805029426_bons";
$pass = "1234567890";
$dbname = "u805029426_bons";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
