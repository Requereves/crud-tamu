<?php
$id_tamu = $_GET['id_tamu'];
$username = $_POST['username']; 
$email = $_POST['email'];
$asal = $_POST['asal'];
$pekerjaan = $_POST['pekerjaan'];
$keperluan = $_POST['keperluan'];

include 'koneksi.php';
$sql = "UPDATE tamu SET username='$username', email='$email', asal='$asal', pekerjaan='$pekerjaan', keperluan='$keperluan' WHERE id_tamu='$id_tamu'";
$query = mysqli_query($koneksi, $sql);

if($query) {
    header("Location:?url=admin");
}else{
    echo"<script>alert('Maaf Data Tidak Tersimpan'); window.locatin.assign('?url=admin'); </script>";
}