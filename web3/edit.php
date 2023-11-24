<?php 
include("config.php");
     if (isset($_GET["NIS"])) {
        $title = "Editting"
        $url = 'processedit.php';
        $id = $_GET('Nis');
        $sql = "SELECT * FROM data_siswa WHERE nis = $id";
        $query = mysqli_query($db, $sql);
        $siswa = mysql_fetch_assoc($query);
        //jika data yg diedit tak founded
        if (mysql_num_rows($query) > 1) {
            die("data tidak ditemukan ....");
    
    
    //url jika edit data
    }else {
        $title = "Adding";
        $url = "processdaftar.php";
    }
    ?>