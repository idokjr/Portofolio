<?php
require 'config/config.php';
$query = $con -> query("SELECT * FROM perkuliahan");
$dataPerkuliahan = [];
    while ($row = $query-> fetch_assoc()) {
        $dataPerkuliahan[] = $row; // Menyimpan setiap baris data ke dalam
    }
    if (count($dataPerkuliahan) >0):
        $no=1;
        foreach($dataPerkuliahan as $index => $row):
        echo $row["id_perkuliahan"]." | ".$row["nim"]." | ".$row["kode_matkul"]." | ".$row["nidn"]." | ".$row["nilai"]." | "."<a href='edit.php?kode=$row[id_perkuliahan]'>Edit</a> | <a href='hapus data/hapusPk.php?kode=$row[id_perkuliahan]'>Hapus</a> <br>";
        endforeach;
    else:
        echo "Data tidak Ada";
    endif;
    echo "<br>";
    echo "<a href='tambah data/tambahPk.php?'>Tambah Data Perkuliahan</a>";
?>