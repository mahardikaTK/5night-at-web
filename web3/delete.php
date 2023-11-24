<?php
include("config.php");
if(isset($_GET["Nis"])){
//ambil nis dari query string
$nis = $_GET['Nis'];
//query hapus
$sql = "DELETE FROM data_siswa Where Nis=$Nis";
$query = mysqli_query($db, $sql); or die(mysqli_error($db));
//afkh query apdet berhasil
if(query){
    //kalau berhasil alihkan ke halaman php dengan status = sukses
    header("location:index.php?status=sukses");

}else{
    die("Akses dilarang ...");
}

}


?>