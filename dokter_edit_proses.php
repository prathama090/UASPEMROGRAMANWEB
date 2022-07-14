<?php include 'koneksi.php';

    $id            = $_POST['id_dokter'];
    $nama_dokter   = $_POST['nama_dokter'];
    $alamat        = $_POST['alamat'];
    $no_hp         = $_POST['no_hp'];
    $spesialis     = implode(",", $_POST['spesialis']);

    $query = "UPDATE tb_dokter SET
                nama_dokter = '$nama_dokter', 
                alamat      = '$alamat',
                no_hp       = '$no_hp',
                spesialis   = '$spesialis'
            WHERE id_dokter  = '$id'";
    mysqli_query($koneksi, $query);
    header("location:dokter.php?pesan=edit");
?>