<?php
$server = 'localhost';  
$user = 'root';         
$pass = '';             
$database = 'webhoctap'; 
$conn = new mysqli($server, $user, $pass, $database);

if (!$conn) {
    die("Kết nối cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

?>

