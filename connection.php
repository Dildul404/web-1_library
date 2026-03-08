<?php

// Path database
$server = "localhost";
$username = "root";
$password = "";
$db = "login_dan_signin";

// create blueprint connection  db
$conn = new mysqli($server, $username, $password, $db);

// check connection 
if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
echo "connect successfully";
?>