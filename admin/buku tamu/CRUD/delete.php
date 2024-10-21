<?php
include '../../../config/koneksi.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = mysqli_query($conn, "DELETE FROM buku_tamu WHERE id = '$id'");

    if ($query) {
        header("Location: ../");
    } else {
        echo "gagal";
    }
} else {
    echo "id tidak ada";
}
