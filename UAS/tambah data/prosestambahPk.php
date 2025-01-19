<?php
include_once "../config/config.php";
$nim=$_POST['nim'];
$kode_matkul=$_POST['kode_mk'];
$nidn=$_POST['nidn'];
$nilai=$_POST['nilai'];
$result= mysqli_query($con,"INSERT INTO perkuliahan VALUES('','$nim','$kode_matkul','$nidn','$nilai')");
header("Location:../perkuliahan.php");
?>