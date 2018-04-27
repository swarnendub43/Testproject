<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testproject";

// Check connection

  
  $conn = new mysqli($servername,$username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?> 
