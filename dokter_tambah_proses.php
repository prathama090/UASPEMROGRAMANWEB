<?php include 'koneksi.php';

    $nama_dokter    = $_POST['nama_dokter'];
    $alamat         = $_POST['alamat']; 
    $no_hp          = $_POST['no_hp'];
    $spesialis      = implode(",", $_POST['spesialis']);
    
    if (empty($nama_dokter) || empty($alamat)) 
    {
        header("location:dokter_tambah.php?pesan=kosong");
    }
    else 
    {
        $query = "INSERT INTO tb_dokter (nama_dokter, alamat, no_hp, spesialis)
                VALUES ('$nama_dokter', '$alamat', '$no_hp', '$spesialis')";
        mysqli_query($koneksi, $query) or die ($koneksi);

        header("location:dokter.php?pesan=tambah");
    }  
?>