<?php
// koneksi database
include '../../../koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$prodi = $_POST['prodi'];
$angkatan = $_POST['angkatan'];

// update data ke database
mysqli_query($koneksi, "update anggota set nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', alamat='$alamat', prodi='$prodi', angkatan='$angkatan' where nim='$nim'");

// mengalihkan halaman kembali ke index.php
header("location:../../tambah.php");
