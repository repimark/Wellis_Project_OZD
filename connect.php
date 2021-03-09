<?php 
// header('Content-Type: text/html; charset=utf-8');
$host = 'localhost:3306';
$user = 'hrwellis_ozd';
$pass = 'Wellis2021.!,';
$db = 'hrwellis_ozd';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   // echo "Connected to MySQL successfully!";
}
?>