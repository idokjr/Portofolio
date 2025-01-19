<?php
include_once "../config/config.php";
$kode_mk=$_POST['kd_mk'];
$nama_mk=$_POST['nama_mk'];
$sks=$_POST['sks'];
$result= mysqli_query($con,"INSERT INTO matakuliah VALUES('$kode_mk','$nama_mk','$sks')");
header("Location:../matakuliah.php");
?>