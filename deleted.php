<?php
session_start();
$user=$_SESSION['user'];
$servername = "localhost";
$username = "root";
$password = "";
$db="inventory";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$subcat=$_POST['subcat'];	
$catid=$_POST['cat'];
?>