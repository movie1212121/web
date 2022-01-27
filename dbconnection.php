<?php
$servername = "localhost";
$username = "id18337893_admin";
$password = "n%o[yAC4tgy80#|a";
try {
    $conn = new PDO("mysql:host=$servername;dbname=id18337893_moviestore", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "connected";
    }
catch(PDOException $e)
    {
    //echo " <strong>Connection failed: <br> " . $e->getMessage();
    }

?>
