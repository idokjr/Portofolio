<?php
include_once "../config/config.php";
$nidn=$_POST['nidn'];
$nama=$_POST['nama_dosen'];
$result= mysqli_query($con,"INSERT INTO dosen VALUES('$nidn','$nama')");
header("Location:../dosen.php");
?>