<?php
// koneksi database
include '../../../koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$tanggal = $_POST['tanggal'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];
$keperluan = $_POST['keperluan'];

mysqli_query($conn, "update buku_tamu set nim='$nim', tanggal='$tanggal', jam_masuk='$jam_masuk', jam_keluar='$jam_keluar', keperluan='$keperluan' where id='$id'");

header("location:../");
