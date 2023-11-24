<?php

$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$namedatabase = "db_siswa";
$db = mysqli_connect($SERVER, $USER, $PASSWORD, $namedatabase);
if (!$db) {
    die("Gagal terhubung dengan database". mysqli_connect_error());
}


?>