<?php
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "siswa"; 
$connect  = mysqli_connect($host, $username, $password, $database);
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>
