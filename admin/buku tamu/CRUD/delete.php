<?php
include '../../../koneksi.php';

if (isset($_GET['nim'])) {
    $nim = mysqli_real_escape_string($conn, $_GET['nim']);
    $query = mysqli_query($conn, "DELETE FROM anggota WHERE nim = '$nim'");

    if ($query) {
        header("Location: ../");
    } else {
        echo "gagal";
    }
} else {
    echo "nim tidak ada";
}
