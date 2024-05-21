<?php

$username = $_POST['username'];
$email = $_POST['email'];
$asal = $_POST['asal'];
$pekerjaan = $_POST['pekerjaan'];
$keperluan = $_POST['keperluan'];

include 'koneksi.php';
$sql = "INSERT INTO tamu(username,email,asal,pekerjaan,keperluan) VALUES('$username','$email','$asal','$pekerjaan','$keperluan')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
}else{
    echo "<script>alert('Maaf Data Tidak Tersimpan'); window.location.assign('?url=tamu');</script>";
} 