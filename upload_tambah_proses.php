<?php include 'koneksi.php';

    $judul           = $_POST['judul'];
    $keterangan      = $_POST['keterangan']; 
    $file            = $_FILES['file']['name'];
    $ukuran          = $_FILES['file']['size'];
    $file_tmp        = $_FILES['file']['tmp_name'];
    $pecah           = explode('.', $file);
    $tipe            = $pecah[1];
    
    if (empty($judul && $file))
    {
        header("location:upload_tambah.php?pesan=kosong");
        die();
    }
    else
    {
        if($ukuran > 4096000 || $ukuran == 0)
        {
            header("location:upload_tambah.php?pesan=ukuran");
            die();
        }
        else
        {
            $nama_file =round(microtime(true)) . "." . $tipe;
            move_uploaded_file($file_tmp, 'file/' . $nama_file);
            $query = "INSERT INTO tb_file (nama_file, judul, keterangan)
                    VALUES ('$nama_file', '$judul', '$keterangan')";
            mysqli_query($koneksi, $query)or die(mysqli_error($koneksi));;

            header("location:upload.php?pesan=tambah");
        }
    }
?>