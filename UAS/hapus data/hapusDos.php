<?php
include "../config/config.php";
mysqli_query($con,"DELETE FROM dosen where nidn='$_GET[kode]'");
header("Location:../dosen.php");
?>