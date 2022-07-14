<?php include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);


    $query = " SELECT * FROM tb_admin
                WHERE username='$username' AND password='$password'";
    $data = mysqli_query($koneksi, $query);
    $d = mysqli_fetch_array($data);
    $cek = mysqli_num_rows($data);
    if ($cek > 0) {
        header('location:admin.php');
    } else {
        header('location:login.php?pesan=notfound');
    }
    ?>
