<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysqli_connect("localhost","root","" ,"masyarakat");

if ($host -> connect_errno) {
    echo "Failed to connect to MySQL: " . $host -> connect_error;
    exit();
}
?>