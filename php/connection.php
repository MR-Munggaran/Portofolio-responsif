<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$db = "portofolio";

$conn = mysqli_connect($serverName, $userName, $password, $db);

if(!$conn){
    die("server failed to connect"); 
}
?>