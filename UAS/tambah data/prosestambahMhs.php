<?php
include_once "../config/config.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$tgl=$_POST['tgl'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$result= mysqli_query($con,"INSERT INTO mahasiswa VALUES('$nim','$nama','$tgl','$alamat','$jenis_kelamin')");
header("Location:../mahasiswa.php");
?>