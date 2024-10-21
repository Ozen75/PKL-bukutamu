<?php
include '../../../config/koneksi.php';

if (isset($_POST['action']) && $_POST['action'] === 'keluar') {
    jam_keluar(); // Memanggil fungsi untuk memperbarui jam keluar
} else {
    jam_masuk(); // Memanggil fungsi untuk memasukkan data awal (tanpa jam keluar)
}


function jam_masuk(){
    global $conn;
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nim = $_POST['nim'];
        $tanggal = $_POST['tanggal'];
        $jam_masuk = $_POST['jam_masuk'];
        $keperluan = $_POST['keperluan'];

        // Masukkan data ke buku_tamu tanpa jam_keluar
        $sql = "INSERT INTO buku_tamu (nim, tanggal, jam_masuk, keperluan) VALUES ('$nim', '$tanggal', '$jam_masuk', '$keperluan')";
    
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Data masuk berhasil ditambahkan!');</script>";
            header("location:../../../kunjungan.php");
        } else {
            echo "<script>alert('Terjadi kesalahan saat menambahkan data masuk.');</script>";
        }
    }
}

function jam_keluar(){
    global $conn;
    
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $nim = $_POST['nim'];
        $tanggal = $_POST['tanggal']; // Tanggal yang sama dengan jam_masuk
        $jam_keluar = date('H:i:s'); // Jam keluar otomatis sesuai saat tombol diklik

        // Update jam_keluar di data buku_tamu yang sudah ada
        $sql = "UPDATE buku_tamu SET jam_keluar = '$jam_keluar' WHERE nim = '$nim' AND tanggal = '$tanggal'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Jam keluar berhasil diperbarui!');</script>";
            header("location:../");
        } else {
            echo "<script>alert('Terjadi kesalahan saat memperbarui jam keluar.');</script>";
        }
    }
}


