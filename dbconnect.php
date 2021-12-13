<?php
// Mysqli or PDO

$hostname="localhost";
$userHost ="root";
$passHost ="";
$dbname ="iot";
// connect
$conn = new mysqli($hostname, $userHost, $passHost, $dbname);
if(!$conn->connect_error){
    // echo "connected";
}
else{
echo "connection failed".$conn->error;
}

// selection


?>