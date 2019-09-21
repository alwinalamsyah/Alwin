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
$sql= "CREATE TABLE work(
    id int PRIMARY KEY,
    name varchar[50],
    id_salary int
    )";

if($koneksi->query($sql)==TRUE){
    echo "Table berhasil";
}
else{
    echo "Table gagal dibuat"; 
$sql= "CREATE TABLE kategori(
    id int PRIMARY KEY,
    salary int
    )";

if($koneksi->query($sql)==TRUE){
    echo "Table berhasil";
}
else{
    echo "Table gagal dibuat";  
}
$sql= "INSERT INTO nama(
    id,
    name,
    id_work,
    id_salary
    ) VALUE(
    ['1','2'],
    ['Bintang','Tasya'],
    ['1','2'],
    )";
$sql= "INSERT INTO work(
    id,
    name,
    id_salary
    ) VALUE(
    ['1','2'],
    ['Frontend Dev','Backend Dev'],
    ['1','2']
    )";
$sql= "INSERT INTO kategori(
    id,
    salary
    ) VALUE(
    ['1','2'],
    ['10000000','12000000']
    )";
if($koneksi->query($sql)==TRUE){
    echo "Data Terupdate";
}
else{
    echo "Data gagal";  
}
?>