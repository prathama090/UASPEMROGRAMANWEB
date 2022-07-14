<?php include 'koneksi.php';

    $nama_kamar          = $_POST['nama_kamar'];
    $kapasitas          = $_POST['kapasitas']; 

    if (empty($nama_kamar) || empty($kapasitas)) 
    {
        header("location:prodi_tambah.php?pesan=kosong");
    }
    else 
    {
        $query = "INSERT INTO tb_kamar (nama_kamar, kapasitas)
                VALUES ('$nama_kamar', '$kapasitas')";
        mysqli_query($koneksi, $query);

        header("location:kamar.php?pesan=tambah");
    }  
?>