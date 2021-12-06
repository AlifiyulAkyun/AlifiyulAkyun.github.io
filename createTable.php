<?php
$namaHost ="localhost";
$username ="root";
$password ="";
$database="Formulir";

$connect =mysqli_connect($namaHost, $username, $password, $database);

if($connect){
    echo " Koneksi dengan MYSQL berhasil <br> ";
}
else{
    echo "Koneksi dengan MYSQL gagal" .mysqli_connect_error();
}
$sql= "CREATE TABLE VaksinasiDosis1(
    ID INT PRIMARY KEY,
    Nama VARCHAR(30)NOT NULL,
 
    Alamat VARCHAR(40) NOT NULL,
    Tempat_Lahir VARCHAR(20)NOT NULL,
    Tanggal_Lahir VARCHAR(8)NOT NULL,
    Jenis_Kelamin VARCHAR(10)NOT NULL,
    No_Telepon INT(12)NOT NULL,
    No_KTP INT(16)NOT NULL,
    Jenis_Vaksin VARCHAR(15)NOT NULL,
    Pertanyaan1 VARCHAR(20)NOT NULL,
    Pertanyaan2 VARCHAR(20)NOT NULL,
    Pertanyaan3 VARCHAR(20)NOT NULL)";

if(mysqli_query($connect,$sql)){
    echo " Database berhasil dibuat ";
}
else{
    echo "Database gagal dibuat <br>".mysqli_error($connect);
}
mysqli_close($connect);
?>

