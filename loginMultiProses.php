<?php
include "koneksi.php";
$Nama=$_POST['Nama'];
$password=md5($_POST['password']);

$query="SELECT * FROM VaksinasiDosis1 WHERE Nama='$Nama' and password='$password'";
$result=mysqli_query($connect, $query);
$row=mysqli_fetch_assoc($result);

if($row['level']=='admin'){
    echo "Anda berhasil login. Silahkan menuju";?>
    <a href="homeAdmin.html">Halaman HOME</a>
    <?php
}else if($row['level']=='masyarakat'){
echo "Anda berhasil login. Silahkan menuju";?>
<a href="homeGuest.html">Halaman HOME</a>
<?php
}else{
    echo "Anda berhasil login. Silahkan menuju";?>
    <a href = "loginForm.html">Login kembali</a>
    <?php
    echo mysqli_error($connect);
}
?>
