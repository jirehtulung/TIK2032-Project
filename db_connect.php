<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "portofolio"; 

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
