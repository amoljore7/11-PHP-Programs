<?php
$servername = "localhost";
$username = "";
$password = "";

//Creating connection with the database:

$conn = @mysql_connect($servername,$user,$password) or die("Connection Failed");


// Check connection
if (!$conn) {
    die("Connection failed: ");
} 
echo "Connected successfully";




?>