<?php
include "../config/config.php";
mysqli_query($con,"DELETE FROM matakuliah where kode_matkul='$_GET[kode]'");
header("Location:../matakuliah.php");
?>