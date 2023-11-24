<?php
include("config.php");
if (isset($_GET["nis"])) {
$title = "edit";
$url = "processedit.php";
$id = $_GET['nis'];
//buat query untuk ambil data dari database
$sql = "SELECT * FROM data_siswa WHERE Nis = $id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);
//jika data yang didit tak ditermkan
if (mysqli_num_rows($query) > 1) {
// jika data yang diedit tidak ditemukan 
if(mysqli_num_rows($query) < 1) {
    die("data tak ditemukan");
}
?>