<?php
require 'config/config.php';
$query = $con -> query("SELECT * FROM dosen");
$dataDosen = [];
    while ($row = $query-> fetch_assoc()) {
        $dataDosen[] = $row; // Menyimpan setiap baris data ke dalam
    }
    if (count($dataDosen) >0):
        $no=1;
        foreach($dataDosen as $index => $row):
        echo $row["nidn"]." | ".$row["nama_dosen"]." | "."<a href='edit data/editDos.php?kode=$row[nidn]'>Edit</a> | <a href='hapus data/hapusDos.php?kode=$row[nidn]'>Hapus</a> <br>";
        endforeach;
    else:
        echo "Data tidak Ada";
    endif;
    echo "<br>";
    echo "<a href='tambah data/tambahDos.php?'>Tambah Data Dosen</a>";
?>