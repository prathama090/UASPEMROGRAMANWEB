<?php include 'koneksi.php'; ?>
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
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "kosong") {
                echo "<h5 align='center' style='color:red;'>Data Masih Ada Yang Kosong</h5>";
            }
        }
        ?>
        <h3 align="center">Tambah Data Pasien</h3>
        <br>
        <form action="pasien_tambah_proses.php" method="POST">
            <table align="center">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="tgl_lahir"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L" id="laki" checked><label for="laki">Laki-laki</label>
                        <input type="radio" name="jenis_kelamin" value="P" id="perempuan"><label for="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Dokter</td>
                    <td>
                        <select name="dokter">
                            <?php
                                $no =1;
                                $query = "SELECT * from tb_dokter";
                                $data = mysqli_query($koneksi, $query);
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                        <option value="<?= $d['id_dokter']?>"><?= $d['nama_dokter'] ?></option>
                                        <?php
                                } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kamar</td>
                    <td>
                        <select name="kamar">
                            <?php
                                $no =1;
                                $query = "SELECT * from tb_kamar";
                                $data = mysqli_query($koneksi, $query);
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                        <option value="<?= $d['id_kamar']?>"><?= $d['nama_kamar'] ?></option>
                                        <?php
                                } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Simpan">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>