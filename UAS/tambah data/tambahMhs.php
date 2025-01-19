<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="prosestambahMhs.php" method="post" name="input">
        NIM : <input type="text" name="nim"> <br>
        Nama : <input type="text" name="nama"> <br>
        Tanggal Lahir : <input type="date" name="tgl"> <br>
        Alamat : <input type="text" name="alamat"> <br>
        Jenis_kelamin : <input type="text" name="jenis_kelamin"> <br>
        <input type="submit" value="Tambah">
        <a href="../mahasiswa.php">Batal</a>
    </form>
</body>
</html>