<?php include 'koneksi.php';

$username    =$_POST['username'];
$password    =md5($_POST['password']);
$password2   =md5($_POST['password2']);

if(empty($username && $password))
{
    header("location:admin_tambah.php?pesan=kosong");
}
else
{
    $query_cari = "SELECT username FROM tb_admin WHERE username='$username'";
    $data_cari  = mysqli_query($koneksi, $query_cari);
    $cari       = mysqli_num_rows($data_cari);
    if ($cari > 0)
    {
        header("location:admin_tambah.php?pesan=username");
    }
    else
    {
        if ($password != $password2)
        {
            header("location:admin_tambah.php?pesan=passwprd");
        }
        else
        {
            $query   = "INSERT INTO tb_admin (username, password)
                        VALUES ('$username','$password')";
            mysqli_query($koneksi, $query);
            header ("location:admin.php?pesan=tambah");
        }
    }
}
?>