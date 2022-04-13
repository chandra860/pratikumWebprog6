<?php
/**
 * membuat koneksi
 * 1. menyiaplkan lokasi server, user name dan password
 * 2. test koneksi
 */
include_once("konfugurasi.php");

$cnn = mysqli_connect(DBHOST,DBUSER,DBPASSCODE,DBNAME,DBPORT) or die("koneksi ke DBMS Mysql gagal<br>");
echo "koneksi ke DBMS Mysql sukses<br>";