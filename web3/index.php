<?php include("config.php");?>
<html>
    <head><title>Data para siswa</title></head>
    <body>
        <header><h3>daftar siswa</h3></header>
        <nav><a href="form.php"><button>Tambah baru</button></a></nav>
        <br>
        <table border="1" cellpadding="8">
            <thread>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Kelas</th>
                    <th>Tindakan</th>
                </tr>
            </thread>
            <tbody>
                <?php
                $sql = "SELECT * FROM data_siswa";
                $query = mysqli_query($db, $sql);
                while ($siswa = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>".$siswa['nis']."<td>";
                    echo "<td>".$siswa["Nama"]."</td>";
                    echo "<td>".$siswa["alamat"]."</td>";
                    echo "<td>".$siswa["Jenis_kelamin"]."</td>";
                    echo "<td>".$siswa["No_telpon"]."</td>";    
                    echo "<td>".$siswa["Kelas"]."</td>";
                    echo "<td>";

                    echo "<a href= 'form.php'?Nis=".$siswa["nis"].">Edit</a> |";
                    echo "<a href= 'form.php'?Nis=".$siswa["nis"].">Hapus</a> |";
                    echo "<td>";
                    echo "<tr>";
                }
                ?>
            </tbody>
        </table>
        <p>Total:
            <?php echo mysqli_num_rows($query);?>
        </p>
    </body>

</html>