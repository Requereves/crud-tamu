<?php

$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$query = mysqli_query($koneksi,$sql);

if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();

    $_SESSION['id_admin'] = $data['id_admin'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    if($data['role']=='admin'){
        header('Location:admin.php');
    }else {
        echo "<script>
        alert('Maaf Login Gagal, Silahkan Ulangi Lagi');
        window.location.assign('home.php');
        </script>";
    }
}