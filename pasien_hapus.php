<?php include 'koneksi.php';

    $id = $_GET['id_pasienn'];

    $query = "DELETE FROM tb_pasien WHERE id_pasien='$id'";
    mysqli_query($koneksi, $query);

    header('pasien.php?pesan=hapus');
?>