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
        $kd_mk = $_POST['kd_mk'];
        $nama_mk = $_POST['nama_mk'];

        // Update the record in the database
        $update_query = "UPDATE matakuliah SET kode_matkul='$kd_mk', nama_matkul='$nama_mk' WHERE kode_matkul='$kd_mk'";

        if (mysqli_query($con, $update_query)) {
            echo "Data updated successfully!";
            // Redirect to index page after successful update
            header("Location:../matakuliah.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Fetch the existing data from the database
    if (isset($_GET['kode'])) {
        $data = mysqli_query($con, "SELECT * FROM matakuliah WHERE kode_matkul='$_GET[kode]'");
        $d = mysqli_fetch_array($data);
    }
    ?>

    <form action="" method="post" name="edit">
        Kode mata kuliah : <input type="text" name="kd_mk" value="<?php echo $d['kode_matkul']; ?>"> <br>
        Nama mata kuliah: <input type="text" name="nama_mk" value="<?php echo $d['nama_matkul']; ?>"> <br>
        <input type="submit" name="proses" value="Edit">
        <a href="../matakuliah.php">Batal</a>
    </form>
</body>
</html>