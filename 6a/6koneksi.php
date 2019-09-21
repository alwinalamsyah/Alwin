<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "data";
$koneksi=new mysqli($host,$username,$password,$db);
if($koneksi->connect_error){
    die("koneksi gagal");
}
?>
