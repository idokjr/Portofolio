<?php
require 'config/config.php';
$query = $con -> query("SELECT * FROM matakuliah");
$dataMk = [];
    while ($row = $query-> fetch_assoc()) {
        $dataMk[] = $row; // Menyimpan setiap baris data ke dalam
    }
    if (count($dataMk) >0):
        $no=1;
        foreach($dataMk as $index => $row):
        echo $row["kode_matkul"]." | ".$row["nama_matkul"]." | "."<a href='edit data/editMk.php?kode=$row[kode_matkul]'>Edit</a> | <a href='hapus data/hapusMk.php?kode=$row[kode_matkul]'>Hapus</a> <br>";
        endforeach;
    else:
        echo "Data tidak Ada";
    endif;
    echo "<br>";
    echo "<a href='tambah data/tambahMk.php?'>Tambah Data Mata Kuliah</a>";
?>