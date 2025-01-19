<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h3>Tambah Data Mata kuliah</h3>
    <form action="prosestambahMk.php" method="post" name="input">
        Kode Mata kuliah : <input type="text" name="kd_mk"> <br>
        Nama Mata kuliah : <input type="text" name="nama_mk"> <br>
        SKS : <input type="text" name="sks"> <br>
        <input type="submit" value="Tambah">
        <a href="../matakuliah.php">Batal</a>
    </form>
</body>
</html>