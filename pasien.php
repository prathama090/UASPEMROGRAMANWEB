<?php 
include 'koneksi.php';
?>

<html>
    <head>
        <title>UAS PEMROGRAMAN WEB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            .tambahdata {
                margin-left: 84%;
            }
        </style>
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="pasien.php">Pasien</a>
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
        <h2 align="center">Data Pasien</h2>
        <br>
        <div class="tambahdata">
            <a href="pasien_tambah.php" class="btn btn-primary btn-lg">Tambah Data</a>
        </div>
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="5">No</th>
                    <th scope="col" width="120">Nama</th>
                    <th scope="col" width="1">Alamat</th>
                    <th scope="col" width="110">Tgl Lahir</th>
                    <th scope="col" width="100">Jenis Kelamin</th>
                    <th scope="col" width="100">Dokter</th>
                    <th scope="col" width="100"> Kamar </th>
                    <th scope="col" width="100"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $query = " SELECT tb_pasien.id_pasien,
                                        tb_pasien.nama,
                                        tb_pasien.alamat,
                                        tb_pasien.tgl_lahir,
                                        tb_pasien.jenis_kelamin,
                                        tb_dokter.nama_dokter,
                                        tb_kamar.nama_kamar
                                FROM tb_pasien
                                INNER JOIN tb_dokter
                                ON tb_pasien.dokter = tb_dokter.id_dokter
                                INNER JOIN tb_kamar
                                ON tb_pasien.kamar = tb_kamar.id_kamar
                            ";
                    $data = mysqli_query($koneksi, $query);
                    while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++; ?></th>
                        <td><?= $d['nama'] ?></td>
                        <td><?= $d['alamat'] ?></td>
                        <td>
                            <?= date('d F Y', strtotime($d['tgl_lahir'])) ?>
                        </td>
                        <td>
                            <?php
                                if ($d['jenis_kelamin']=="L")
                                {
                                    echo "Laki-Laki";
                                }
                                else {
                                    echo "Perempuan";
                                }
                            ?>
                        </td>
                        <td><?= $d['nama_dokter'] ?></td>
                        <td><?= $d['nama_kamar'] ?></td>
                        <td>
                            <a href="pasien_edit.php?id=<?= $d['id_pasien'] ?>" class="btn btn-success">Edit</a>
                            <a href="pasien_hapus.php?id_pasienn=<?= $d['id_pasien'] ?>"
                            onclick="return confirm('Yakin ingin menghapus data <?= $d['nama'] ?>?')" 
                            class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>