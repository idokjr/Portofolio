<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'kampus_uas';

$con = NEW mysqli($host,$user,$password,$database);

if ($con-> connect_error){
    die('koneksi gagal: '.$con-> connect_errror);
}
?>