<?php

include '../../../koneksi.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $prodi = $_POST['prodi'];
    $angkatan = $_POST['angkatan'];

    $sql = "INSERT INTO anggota (nim, nama, jenis_kelamin, no_telp, alamat, prodi, angkatan) VALUES ('$nim', '$nama', '$jenis_kelamin', '$no_telp', '$alamat', '$prodi', '$angkatan')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Anggota berhasil ditambahkan!');</script>";
        header("location:../");
    } else {
        echo "<script>alert('Terjadi kesalahan saat menambahkan anggota.');</script>";
    }
}