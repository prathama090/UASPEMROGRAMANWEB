<?php include 'koneksi.php';

    $id     =$_GET['id_hapus'];

    $query ="SELECT * FROM tb_file WHERE id_file = '$id'";
    $data  =mysqli_query($koneksi, $query);
    $d     =mysqli_fetch_array($data);
    unlink('file/' . $d['nama_file']);

    $query = "DELETE FROM tb_file WHERE id_file = '$id'";
    mysqli_query($koneksi, $query);

    header("location:upload.php?pesam=hapus");
?>
