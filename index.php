<!DOCTYPE HTML>
<html>

<head>
    <title>Form Pendaftaran Vaksinasi</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
                <h1>Register</h1>
                <form action="form_add_aksi.php" method="POST">
                
                <table>
                
                <tr>
                        <td>ID</td>
                        <td>:</td>
                        <td><input type="text" name="ID"></td>
                    </tr>
                    
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="Nama"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        
                        <td>Alamat</td>
                        <td>:</td>
                        <td><textarea name="Alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="Tempat_Lahir"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="Tanggal_Lahir"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="Jenis_Kelamin" value="Laki-Laki">Laki-Laki
                            <input type="radio" name="Jenis_Kelamin" value="Perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>No Telepon</td>
                        <td>:</td>
                        <td><input type="number" name="No_Telepon"></td>
                    </tr>
                    <tr>
                        <td>No KTP</td>
                        <td>:</td>
                        <td><input type="number" name="No_KTP"></td>
                    </tr>
                    <tr>
                        <td>Jenis Vaksin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="Jenis_Vaksin" value="Sinovac">Sinovac
                            <input type="radio" name="Jenis_Vaksin" value="Astrazeneca">Astrazeneca
                        </td>
                    </tr>
                   
                    <th>
                        <h2>Pilih Jawaban dengan benar</h2>
                        <tr>
                            <td>- Apakah Anda Sudah pernah vaksin Covid-19 ?</td>
                            <td>:</td>
                            <td>
                                <select name="Pertanyaan1">
                                    <option>YA</option>
                                    <option>TIDAK</option>
                                    <option>admin</option>
                                    <option>karyawan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>- Apakah Anda sedang hamil ?</td>
                            <td>:</td>
                            <td>
                                <select name="Pertanyaan2">
                                    <option>YA</option>
                                    <option>TIDAK</option>
                                    <option>admin</option>
                                    <option>karyawan</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>- Berapa Usia Kehamilan Anda ?</td>
                            <td>:</td>
                            <td>
                                <select name="Pertanyaan3">
                                    <option>Kurang dari atau sama 13 Minggu</option>
                                    <option>Lebih Dari 13 Minggu</option>
                                    <option>admin</option>
                                    <option>karyawan</option>
                                    <option>-</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>-Level ?</td>
                            <td>:</td>
                            <td>
                                <select name="level">
                                    <option>admin</option>
                                    <option>karyawan</option>
                                    <option>masyarakat</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit" name="kirim">Kirim</button>
                                <button type="reset" name="reset">Batal</button>
                            </td>
                        </tr>
                </table>
            </form>
            <p class="login-register-text">Have an account? <a href="utama.php">Login Here</a>.</p>
</form>

</table>
        </div>
    </div>
   <center> <p class="mt-5 mb-3 text-muted text-center">&copy; ALIFIYUL AKYUN -<?= date('Y') ?></p> </center>
</body>

</html>