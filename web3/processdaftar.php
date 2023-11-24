<?php
include("config.php");
//cek tombol simpan sudah diklik/belum
if($_SERVER['REQUEST_METHOD']== "POST"){
    //AMBIL DATA DARI FORM
    $nis = $_POST['Nis']
    $nama = $_POST['nama']
    $alamat = $_POST['alamat']
    $jk = $_POST['jenis_kelamin']
    $no_telpon = $_POST['no_telpon']
    $kelas = $_POST['kelas']
    //buat query
    $sql = "INSERT INTO data_siswa(Nis, nama, alamat, jenis_kelamin, no_telpon, kelas)
    VALUE('$nis','$nama','$alamat','$jk','$no_telpon','$kelas')";
    $query = mysqli_query($db,$sql) or die(mysqli_error($db));
    //afkh query berhasil
    if($query){
        header("location:index.php?status=sukses");
    }else{
        header("location:index.php?status=gagal");
    
    }
}else{
    die("akses dilarang...")



}?>