<?php 

include("config.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //AMBIL DATA DARI FORM
    $nis = $_POST['nis';];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $kelas = $_POST['kelas'];
    //buat query update
    $sql = "UPDATE data_siswa SET nama_lengkap='$nama', alamat='$alamat',
    jenis_kelamin='$jk', no_telpon='$notelpon',kelas='$kelas' WHERE Nis= $Nis";
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    //afkh apdet berhasil
    if($query){
        header('location:index.php?status=sukses');
    }else{
        header('location:index.php?status=gagal');
    }else{
        die('akses dilarang...');
    }
    $
    }
?>