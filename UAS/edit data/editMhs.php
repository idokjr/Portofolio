<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <?php
    // Include database connection
    include "../config/config.php";

    // Check if the form is submitted
    if (isset($_POST['proses'])) {
        // Get form values
        $nim = $_POST['nim'];
        $nama_mhs = $_POST['nama_mhs'];
        $tgl = $_POST['tgl'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jk'];

        // Update the record in the database
        $update_query = "UPDATE mahasiswa SET nim='$nim', nama_mhs='$nama_mhs', tgl_lahir='$tgl', alamat='$alamat', jenis_kelamin ='$jk' WHERE nim='$nim'";

        if (mysqli_query($con, $update_query)) {
            echo "Data updated successfully!";
            // Redirect to index page after successful update
            header("Location: ../mahasiswa.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Fetch the existing data from the database
    if (isset($_GET['kode'])) {
        $data = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$_GET[kode]'");
        $d = mysqli_fetch_array($data);
    }
    ?>

    <form action="" method="post" name="edit">
        NIM : <input type="text" name="nim" value="<?php echo $d['nim']; ?>"> <br>
        Nama : <input type="text" name="nama_mhs" value="<?php echo $d['nama_mhs']; ?>"> <br>
        Tanggal lahir : <input type="date" name="tgl" value="<?php echo $d['tgl_lahir']; ?>"> <br>
        alamat : <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"> <br>
        Jenis Kelamin : <input type="text" name="jk" value="<?php echo $d['jenis_kelamin']; ?>"> <br>
        <input type="submit" name="proses" value="Edit">
        <a href="../mahasiswa.php">Batal</a>
    </form>
</body>
</html>