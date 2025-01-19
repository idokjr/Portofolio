<?php
include "../config/config.php";
mysqli_query($con,"DELETE FROM mahasiswa where nim='$_GET[kode]'");
header("Location:../mahasiswa.php");
?>