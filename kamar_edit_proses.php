<?php include 'koneksi.php';

    $id            = $_POST['id_kamar'];
    $nama_kamar     = $_POST['nama_kamar'];
    $kapasitas     = $_POST['kapasitas'];

    $query = "UPDATE tb_kamar SET
                nama_kamar = '$nama_kamar', 
                kapasitas = '$kapasitas'
            WHERE id_kamar = '$id'";
    mysqli_query($koneksi, $query) or die($koneksi);
    header("location:kamar.php?pesan=edit");
?>