<?php include 'koneksi.php';?>

<html>
    <head>
        <title>UAS PEMROGRAMAN WEB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            .tambahdata {
                    margin-left: 80%;
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
                <a class="nav-link active" href="kamar.php">Kamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upload.php">File</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Admin</a>
            </li>
        </ul>
        <br>
        <?php
            if (isset($_GET['pesan'])){
            if ($_GET['pesan'] == "tambah")
            {
                echo "<h5 align='center' style='color:blue;'>Data Berhasil Disimpan</h5>";
            }
            else if ($_GET['pesan'] == "hapus")
            {
                echo "<h5 align='center' style='color:blue;'>Data Berhasil Dihapus</h5>";
            }
        }
        ?>
        <h2 align="center">Data Kamar</h2>
        <br>
        <div class="tambahdata">
            <a href="kamar_tambah.php" class="btn btn-primary btn-lg">Tambah Data</a>
        </div>
        <br>
        <div class="tabelkamar">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kamar</th>
                    <th scope="col">Kapasitas</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $query = "select * from tb_kamar";
                    $data = mysqli_query($koneksi, $query);
                    while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++; ?></th>
                        <td><?= $d['nama_kamar'] ?></td>
                        <td><?= $d['kapasitas'] ?></td>
                        <td>
                            <a href="kamar_edit.php?id=<?= $d['id_kamar'] ?>" class="btn btn-success">Edit</a>
                            <a href="kamar_hapus.php?id_kamarr=<?= $d['id_kamar'] ?>"
                            onclick="return confirm('Yakin ingin menghapus data kamar <?= $d['nama_kamar'] ?>?')" 
                            class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </body>
</html>