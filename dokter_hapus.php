<?php include 'koneksi.php';

    $id = $_GET['id_dokterr'];

    $query = "DELETE FROM tb_dokter WHERE id_dokter='$id'";
    mysqli_query($koneksi, $query);

    header('location:dokter.php?pesan=hapus');
?>