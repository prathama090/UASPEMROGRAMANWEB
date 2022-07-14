<?php include 'koneksi.php';?>
<html>
    <head>
        <title>UAS PEMROGRAMAN WEB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pasien.php">Pasien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="dokter.php">Dokter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kamar.php">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upload.php">File</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Admin</a>
            </li>
        </ul>
        <br>
        <h3 align="center">Edit Data Admin</h3>
        <br>
        <?php
            $id = $_GET['id'];
            $query = "SELECT * FROM tb_admin WHERE id_admin = $id";
            $data = mysqli_query($koneksi, $query);
            $d = mysqli_fetch_array($data);
        ?>
        <form action="admin_edit_proses.php" method="POST">
            <table align="center">
                <tr>
                    <td>Username</td>
                    <td><?= $d['username']?></td>
                </tr>
                <tr>
                    <td>Password Baru</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Ulangi Password</td>
                    <td><input type="password" name="password2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                        <input type="hidden" name="id_admin" value="<?= $d['id_admin'] ?>">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>