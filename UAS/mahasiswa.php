<?php
require 'config/config.php';
$query = $con -> query("SELECT * FROM mahasiswa");
$dataMahasiswa = [];
    while ($row = $query-> fetch_assoc()) {
        $dataMahasiswa[] = $row; // Menyimpan setiap baris data ke dalam
    }
    if (count($dataMahasiswa) >0):
        $no=1;
        foreach($dataMahasiswa as $index => $row):
        echo $row["nim"]." | ".$row["nama_mhs"]." | ".$row["tgl_lahir"]." | ".$row["alamat"]." | ".$row["jenis_kelamin"]." | "."<a href='edit data/editMhs.php?kode=$row[nim]'>Edit</a> | <a href='hapus data/hapusMhs.php?kode=$row[nim]'>Hapus</a> <br>";
        endforeach;
    else:
        echo "Data tidak Ada";
    endif;
    echo "<br>";
    echo "<a href='tambah data/tambahMhs.php?'>Tambah Data Mahasiswa</a>";
?>