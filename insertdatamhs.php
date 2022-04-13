<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
<title>Tambah Data Mahasiswa</title>
</head>
<body>

<h3>Tambah Data mahasiswa</h3>
<form action="dbinsertdatamhs.php" method="POST">

NIM
<div>
    <input type="text" name="txNIM">
</div>
NAMA
<div>
    <input type="text" name="txNAMA">
</div>
Jenis Kelamin
<div>
    <select>
    <option value="L">Laki-Laki</option>
    <option value="P">perempuan</option>
    </select>
</div>
TGL Lahir
<div>
    <input type="date" name="txTALAG">
</div>
JURUSAN
<div>
<select name="txJUR">
    <option value="MTI">MTI</option>
    <option value="KAB">KAB</option>
</select>
</div>
passcode
<div>
    <input type="password" name="txPASSS">
</div>

<div>
    <button type="submit">simpan data</button>
</div>
</form>

</body>
</html>