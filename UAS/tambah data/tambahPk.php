<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h3>Tambah Data Perkuliahan</h3>
    <form action="prosestambahPk.php" method="post" name="input">
        NIM : <input type="text" name="nim"> <br>
        Kode mata kuliah : <input type="text" name="kode_mk"> <br>
        NIDN : <input type="text" name="nidn"> <br>
        Nilai : <input type="text" name="nilai"> <br>
        <input type="submit" value="Tambah">
        <a href="../perkuliahan.php">Batal</a>
    </form>
</body>
</html>