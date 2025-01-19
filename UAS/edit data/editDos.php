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
        $nidn = $_POST['nidn'];
        $nama_dosen = $_POST['nama_dosen'];

        // Update the record in the database
        $update_query = "UPDATE dosen SET nidn='$nidn', nama_dosen='$nama_dosen' WHERE nidn='$nidn'";

        if (mysqli_query($con, $update_query)) {
            echo "Data updated successfully!";
            // Redirect to index page after successful update
            header("Location:../dosen.php");
            exit;
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Fetch the existing data from the database
    if (isset($_GET['kode'])) {
        $data = mysqli_query($con, "SELECT * FROM dosen WHERE nidn='$_GET[kode]'");
        $d = mysqli_fetch_array($data);
    }
    ?>

    <form action="" method="post" name="edit">
        NIDN : <input type="text" name="nidn" value="<?php echo $d['nidn']; ?>"> <br>
        Nama Dosen : <input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen']; ?>"> <br>
        <input type="submit" name="proses" value="Edit">
        <a href="../dosen.php">Batal</a>
    </form>
</body>
</html>