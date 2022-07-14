<?php include 'koneksi.php';

    $id = $_GET['id_kamarr'];

    $query = "DELETE FROM tb_kamar WHERE id_kamar='$id'";
    mysqli_query($koneksi, $query);

    header('location:kamar.php?pesan=hapus');
?>