<?php
/**
 * menambahkan data ke tabel mhs
 * 1. buat koneksi
 * 2. buat script sql untuk insert data tabel mhs
 *    NIM, NAMA, Jurusan, Tgl lahir, jk, passcode
 * 3. execute point 2
 * 4. cek status
 * 5. close connection
 */

 if(isset($_POST["txNIM"])){
 include_once("dbkoneksi2.php");

 $nim = $_POST["txNIM"];
 $nama = $_POST["txNAMA"];
 $talag = $_POST["txTALAG"];
 $jk = $_POST["txJK"];
 $jur = $_POST["txJUR"];
 $passs = $_POST["txPASSS"];

 $sqlINSERT = "INSERT INTO mhs(NIM, NAMA, JURUSAN, JK, TGL LAHIR, PASSCODE) VALUES
 ('".$nim."','".$nama."','".$jur."','".$jk."','".$talag."','".$passs."'),";

 echo "sql:". $sqlINSERT . "<br>";

$hsl = mysqli_query($cnn, $sqlINSERT);

if($hsl){
    echo "Insert data sukses<br>";
}else{
    echo "Insert data gagal<br>";
}

mysqli_close($cnn);
 }