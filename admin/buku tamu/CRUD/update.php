<?php
// koneksi database
include '../../../koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

mysqli_query($conn, "update anggota set nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', alamat='$alamat', prodi='$prodi', angkatan='$angkatan' where nim='$nim'");

header("location:../");
