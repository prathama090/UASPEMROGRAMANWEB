<?php include 'koneksi.php';

    $nama           = $_POST['nama'];
    $alamat          = $_POST['alamat']; 
    $tgl_lahir      = $_POST['tgl_lahir'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $dokter          = $_POST['dokter'];
    $kamar          = $_POST['kamar'];
    
    if (empty($nama) || empty($alamat)) 
    {
        header("location:pasien_tambah.php?pesan=kosong");
    }
    else 
    {
        $query = "INSERT INTO tb_pasien (nama, alamat, tgl_lahir, jenis_kelamin, dokter, kamar)
                VALUES ('$nama', '$alamat', '$tgl_lahir', '$jenis_kelamin', '$dokter', '$kamar')";
        mysqli_query($koneksi, $query);

        header("location:pasien.php?pesan=tambah");
    }  
?>