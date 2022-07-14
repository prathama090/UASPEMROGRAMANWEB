<?php include 'koneksi.php'; ?>
<html>
    <head>
        <title>UAS PEMROGRAMAN WEB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            .tambahfile{
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
                <a class="nav-link active" href="upload.php">File</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Admin</a>
            </li>
        </ul>
        <br>
        <h2 align="center">Daftar File</h2>
        <br>
        <div class="tambahfile">
            <a href="upload_tambah.php" class="btn btn-primary btn-lg">Upload File</a>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="5">No</th>
                    <th scope="col" width="50">File</th>
                    <th scope="col" width="100">Nama File</th>
                    <th scope="col" width="110">Keterangan</th>
                    <th scope="col" width="100"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $query = " SELECT*FROM tb_file";
                $data = mysqli_query($koneksi, $query);
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++; ?></th>
                        <td><a target="_blank" href="<?= 'file/'.$d['nama_file'];?>">
                            <?=$d['nama_file']?></a>
                        </td>
                        <td><?= $d['judul'] ?></td>
                        <td><?= $d['keterangan'] ?></td>
                        <td>
                            <a href="upload_edit.php?id=<?= $d['id_file'] ?>" class="btn btn-success">Edit</a>
                            <a href="upload_hapus.php?id_hapus=<?= $d['id_file'] ?>"
                            onclick="return confirm('Yakin ingin menghapus data <?= $d['nama_file'] ?>?')" 
                            class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>