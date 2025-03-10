<?php
$host ='localhost';//host database
$user ='root';//Usernamene MySQL
$pass ='';//Password MySQL
$db ='db_biodatadiri';//Name Database

//Koneksi ke Database 
$conn=new mysqli ($host,$user,$pass,$db);

//Cek Koneksi
if ($conn->connect_error) {
    die ("Koneksi gagal: " . $conn->connect_error);
} 

?>