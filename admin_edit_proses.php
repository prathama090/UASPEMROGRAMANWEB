<?php include 'koneksi.php';

$id        =$_POST['id_admin'];
$password  =md5($_POST['password']);
$password2 =md5($_POST['password2']);

if (empty($password && $password2))
{
    header("location:admin_edit.php?pesan=kosong&id=$id");
}
elseif ($password != $password2)
{
    header("location:admin_edit.php?pesan=password&id=$id");
}
else
{
    $query = "UPDATE tb_admin
                SET password = '$password'
                WHERE id_admin = '$id'";
    mysqli_query($koneksi, $query) or die($koneksi);
    header("location:admin.php?pesan=edit");
}