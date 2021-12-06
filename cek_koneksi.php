<?php
$namaHost ="localhost";
$username ="root";
$password ="";
$database ="Formulir";

$connect =mysqli_connect($namaHost, $username, $password, $database);

if($connect){
    echo "Koneksi dengan MYSQL berhasil";
}
else{
    echo "Koneksi dengan MYSQL gagal" .mysqli_connect_error();
}
?>
