<?php

$id_tamu = $_GET['id_tamu'];

include 'koneksi.php';
$sql = "DELETE FROM tamu WHERE id_tamu = '$id_tamu'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header('Location:?url=admin');
}else{
    echo "<script>alert('Maaf Data Tidak Terhapus'); window.location.assign('?url=admin');</script>";
} 