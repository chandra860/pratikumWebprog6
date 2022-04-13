<?php
/**
 * membuat tabel;
 * 1. koneksi server database dan membuka database
 * 2. script sql create tabel
 * tabel: mhs
 * field: NIM varchar(8), NAMA varchar(30), Jurusan varchar(20), Jkm enum, TGL Lahir date, PASSCODE varchar(10)
 * 3. execute script point 2
 * 4. cek status
 * 5. close connection
 */
include_once("dbkoneksi2.php");
$sql = "CREATE TABLE mhs(
    NIM varchar(8) PRIMARY KEY,
    NAMA varchar(30),
    JURUSAN varchar(20),
    JK varchar(1),
    TGL LAHIR date,
    PASSCODE varchar(10)
);";

$hsl = mysqli_query($cnn,$sql);

if($hsl){
    echo "pembuatan tabel <strong>mhs</strong> sukses<br>";
}else{
    echo "pembuatan tabel <strong>mhs</strong> Gagal<br>";
}
mysqli_close($cnn);
