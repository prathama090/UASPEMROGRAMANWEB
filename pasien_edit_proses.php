<?php include 'koneksi.php';

    $id             = $_POST['id_pasien'];
    $nama           = $_POST['nama'];
    $alamat          = $_POST['alamat'];
    $tgl_lahir      = $_POST['tgl_lahir'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $dokter          = $_POST['dokter'];
    $kamar          = $_POST['kamar'];

    $query = "UPDATE tb_pasien SET
                nama = '$nama', 
                alamat = '$alamat', 
                tgl_lahir = '$tgl_lahir', 
                jenis_kelamin = '$jenis_kelamin',
                prodi = '$prodi',
                kamar = '$kamar'
            WHERE id_pasien = '$id'";
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    header("pasien.php?pesan=edit");
?>