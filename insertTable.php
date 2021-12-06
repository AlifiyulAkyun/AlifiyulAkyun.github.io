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
$sql= "INSERT INTO VaksinasiDosis1(ID,Nama, Alamat,Tempat_Lahir, Tanggal_Lahir,Jenis_Kelamin,No_Telepon,No_KTP,Jenis_Vaksin,Pertanyaan1,Pertanyaan2,Pertanyaan3)
VALUES ('01', 'Alifiyul Akyun','Jl.Polowijen 2','Malang','29/05/02','Perempuan','081235266011','2131234567891234','Astrazeneca', 'TIDAK','TIDAK','-'),
('02', 'Arjuna Anggara','Jl.Bululawang 3','Malang','30/05/01','Laki-Laki','081235266022','2131234567891255','Sinovac','TIDAK','TIDAK','-')";
if(mysqli_query($connect,$sql)){
    echo " Record berhasil ditambahkan ";
}
else{
    echo " Record gagal ditambahkan <br>".mysqli_error($connect);
}
mysqli_close($connect);
?>