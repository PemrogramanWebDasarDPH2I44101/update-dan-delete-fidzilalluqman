<?php
require_once("db.php");  
$servername = "localhost";
$username = "root";
$password = "";
$db = "WebDasar";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>