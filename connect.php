<?php 
// header('Content-Type: text/html; charset=utf-8');
$host = 'localhost';
$user = 'u227195896_ozd';
$pass = 'Repka123.';
$db = 'u227195896_wellis_ozd';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   // echo "Connected to MySQL successfully!";
}
?>