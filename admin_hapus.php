<?php include 'koneksi.php';

    $id = $_GET['id_admin'];

    $query = "DELETE FROM tb_admin WHERE id_admin='$id'";
    mysqli_query($koneksi, $query);

    header("location:admin.php?pesan=hapus");
?>