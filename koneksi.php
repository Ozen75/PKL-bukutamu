<?php

$conn = mysqli_connect("localhost","root","","buku_tamu");
if (mysqli_connect_errno()) {
    printf("", mysqli_connect_error());
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}