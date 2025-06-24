<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "sismape";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Gagal sambung ke pangkalan data: " . mysqli_connect_error());
}
?>