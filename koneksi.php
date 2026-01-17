<?php 

$host = "localhost";
$port = 
$user = "root";
$pass = "";
$database = "users";

$conn = mysqli_connect($host,$user,$pass,$database);
if(!$conn){
    die("Koneksi gagal ".mysqli_connect_error());
}