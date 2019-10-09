<?php
include "6koneksi.php";
$sql= "CREATE TABLE nama(
    id int PRIMARY KEY,
    name varchar[50],
    id_work int,
    id_salary int
    )";

if($koneksi->query($sql)==TRUE){
    echo "Table berhasil";
}
else{
    echo "Table gagal dibuat"; 
$sql= "INSERT INTO nama(
    id,
    name,
    id_work,
    id_salary
    ) VALUE(
    1,'Bintang,1
    )";
?>
