<?php include 'koneksi.php';?>

<html>
    <head>
        <title>UAS PEMROGRAMAN WEB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            .tambahdata {
                margin-left: 75%;
            }
        </style>
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
                <a class="nav-link active" href="login.php">Admin</a>
            </li>
        </ul>
        <br>
        <h2 align="center">Data Admin</h2>
        <div class="tambahdata">
            <a href="admin_tambah.php" class="btn btn-primary btn-lg">Tambah Data</a>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="5">No</th>
                    <th scope="col" width="70">Username</th>
                    <th scope="col" width="70">password</th>
                    <th scope="col" width="120"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $query = "SELECT * FROM tb_admin";
                    $data = mysqli_query($koneksi, $query);
                    while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++; ?></th>
                        <td><?= $d['username'] ?></td>
                        <td><?= $d['password'] ?></td>
                        <td>
                            <a href="admin_edit.php?id=<?= $d['id_admin'] ?>" class="btn btn-success">Edit</a>
                            <a href="admin_hapus.php?id_admin=<?= $d['id_admin'] ?>"
                            onclick="return confirm('Yakin ingin menghapus data <?= $d['username'] ?>?')" 
                            class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>