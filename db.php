<?php
$servername = "mydb.cji2omcuq031.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "#1357911shukla";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

