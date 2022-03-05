<?php
$dbHost = "localhost";
$dbUser = "testuser";
$dbPass = "mypassword";
$dbName = "Rescue Angels";
try 
{
    $conn = new PDO("mysql:host = $dbHost; dbname = $dbName",$dbUser, $dbPass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "connected";
}
catch(PDOException $e)
{
    echo '<br>' . $e->getMessage();
}

?>
