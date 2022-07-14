<?php
include 'koneksi.php';

$id              = $_POST['id_file'];
$judul           = $_POST['judul'];
$keterangan      = $_POST['keterangan']; 
$file            = $_FILES['file']['name'];
$ukuran          = $_FILES['file']['size'];
$file_tmp        = $_FILES['file']['tmp_name'];
$pecah           = explode('.', $file);
$tipe            = $pecah[1];

if (empty($judul))
{
    header('location:upload_edit.php?id=$id&pesan=kosong');
    die();
}
else
{
    if(empty($file)) 
    {
        $query="UPDATE tb_file
                SET judul = '$judul',
                keterangan = '$keterangan'
                WHERE id_file ='$id'";
    }
    else
    {
        if($ukuran > 4096000 || $ukuran == 0)
        {
            header('location:upload_edit.php?id=$id&pesan=ukuran');
            die();
        }
        else
        {
            $query_file = "SELECT * FROM tb_file WHERE id_file = '$id'";
            $data_file  = mysqli_query($koneksi, $query_file);
            $d_file     = mysqli_fetch_array($data_file);
            unlink('file/' . $d_file['nama_file']);

            $nama_file = round(microtime(true)) . "." . $tipe;
            move_uploaded_file($file_tmp,'file/'.$nama_file);
            $query = " UPDATE tb_file
                        SET nama_file = '$nama_file',
                            judul = '$judul',
                            keterangan = '$keterangan'
                            WHERE id_file = '$id'";
        }
    }
    mysqli_query($koneksi, $query)or die($koneksi);
    header('location:upload.php?pesan=edit');    
}
?>