<?php
include "koneksi.php";
if(isset($_POST['kirim'])){
    $ID=$_POST['ID'];
   
    $Nama=$_POST['Nama'];
    $password=md5($_POST['password']);
    $Alamat=$_POST['Alamat'];
    $Tempat_Lahir=$_POST['Tempat_Lahir'];
    $Tanggal_Lahir=$_POST['Tanggal_Lahir'];
    $Jenis_Kelamin=$_POST['Jenis_Kelamin'];
    $No_Telepon=$_POST['No_Telepon'];
    $No_KTP=$_POST['No_KTP'];
    $Jenis_Vaksin=$_POST['Jenis_Vaksin'];
    $Pertanyaan1=$_POST['Pertanyaan1'];
    $Pertanyaan2=$_POST['Pertanyaan2'];
    $Pertanyaan3=$_POST['Pertanyaan3'];  
    $level=$_POST['level'];


$simpan= " INSERT INTO VaksinasiDosis1(ID, Nama ,password, Alamat,Tempat_Lahir, Tanggal_Lahir,Jenis_Kelamin,No_Telepon,No_KTP,Jenis_Vaksin,Pertanyaan1,Pertanyaan2,Pertanyaan3,level)
VALUE('$ID','$Nama','$password','$Alamat','$Tempat_Lahir','$Tanggal_Lahir','$Jenis_Kelamin','$No_Telepon','$No_KTP','$Jenis_Vaksin','$Pertanyaan1','$Pertanyaan2','$Pertanyaan3','$level')";

$result=mysqli_query($connect,$simpan);
if($result){
    echo "<script>alert('Data Telah Berhasil Disimpan');window.location='index.php'</script>";
}
}
?>