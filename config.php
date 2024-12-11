<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "ojolalisinau";

$db = mysqli_connect($server,$user,$password,$nama_database);

if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>