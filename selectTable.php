<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style1.css"/>
    </head>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>No Telepon</th>
                <th>No KTP</th>
                <th>Jenis Vaksin</th>
                <th>Pertanyaan 1</th>
                <th>Pertanyaan 2</th>
                <th>Pertanyaan 3</th>
            </tr>
            <?php
            include "koneksi.php";
            $query="SELECT * FROM VaksinasiDosis1";
            $result=mysqli_query($connect, $query);

            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["ID"] ?></td>
                        <td><?php echo $row["Nama"] ?></td>
                        <td><?php echo $row["Alamat"] ?></td>
                        <td><?php echo $row["Tempat_Lahir"] ?></td>
                        <td><?php echo $row["Tanggal_Lahir"] ?></td>
                        <td><?php echo $row["Jenis_Vaksin"] ?></td>
                        <td><?php echo $row["No_Telepon"] ?></td>
                        <td><?php echo $row["No_KTP"] ?></td>
                        <td><?php echo $row["Jenis_Vaksin"] ?></td>
                        <td><?php echo $row["Pertanyaan1"] ?></td>
                        <td><?php echo $row["Pertanyaan2"] ?></td>
                        <td><?php echo $row["Pertanyaan3"] ?></td>
                    <?php
                }
            }
            else{
                echo "0 results";
            }   
            ?>
        </table>
    </body>
</html>