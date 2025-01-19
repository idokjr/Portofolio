<?php
include "../config/config.php";
mysqli_query($con,"DELETE FROM perkuliahan where id_perkuliahan='$_GET[kode]'");
header("Location:../perkuliahan.php");
?>