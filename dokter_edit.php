<?php  include 'koneksi.php'; ?>
 
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
        <h3 align="center">Edit Data Dokter</h3>
        <br>
        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM tb_dokter WHERE id_dokter='$id'";
        $data = mysqli_query($koneksi, $query);
        $d = mysqli_fetch_array($data);
        $spesialis = explode(',', $d['spesialis']); 
        ?>
        <form action="dokter_edit_proses.php" method="POST">
            <table align="center">
                <tr>
                    <td>Nama Dokter</td>
                    <td><input type="text" name="nama_dokter" value="<?= $d['nama_dokter'] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?= $d['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td><input type="text" name="no_hp" value="<?= $d['no_hp'] ?>"></td>
                </tr>
                <td>Spesialis</td>
                    <td> 
                        <input type="checkbox" name="spesialis[]" value="Bedah"
                            <?php
                                if (in_array("Bedah", $spesialis)) {
                                    echo "checked";
                                }
                            ?>>Bedah <br>
                        <input type="checkbox" name="spesialis[]" value="Anak"
                            <?php
                                if (in_array("Anak", $spesialis)) {
                                    echo "checked";
                                }
                            ?>>Anak <br>
                        <input type="checkbox" name="spesialis[]" value="Kelamin"
                            <?php
                                if (in_array("Kelamin", $spesialis)) {
                                    echo "checked";
                                }
                            ?>>Kelamin <br>
                        <input type="checkbox" name="spesialis[]" value="Tht"
                            <?php
                                if (in_array("Tht", $spesialis)) {
                                    echo "checked";
                                }
                            ?>>Tht <br>
                        <input type="checkbox" name="spesialis[]" value="Mata"
                            <?php
                                if (in_array("Mata", $spesialis)) {
                                    echo "checked";
                                }
                            ?>>Mata <br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Simpan">
                        <input type="hidden" name="id_dokter" value="<?= $d['id_dokter'] ?>">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>