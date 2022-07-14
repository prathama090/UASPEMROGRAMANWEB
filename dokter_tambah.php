<html>
    <head>
        <title>UAS PEMROGRAMAN WEB</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            .nohp{
                font-size: 13px;
                color: #8c8c8c;
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
        <h3 align="center">Tambah Data Dokter</h3>
        <br>
        <form action="dokter_tambah_proses.php" method="POST">
            <table align="center">
                <tr>
                    <td>Nama Dokter</td>
                    <td><input type="text" name="nama_dokter"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td><input type="text" name="no_hp"></td>
                    <tr>
                        <td></td>
                        <td><p class="nohp">No HP Harus Berjumlah 10 Angka</p></td>
                    </tr>
                </tr>
                <tr>
                    <td>Spesialis</td>
                    <td>
                        <input type="checkbox" name="spesialis[]" value="Bedah">Bedah <br>
                        <input type="checkbox" name="spesialis[]" value="Anak">Anak <br>
                        <input type="checkbox" name="spesialis[]" value="Kelamin">Kelamin <br>
                        <input type="checkbox" name="spesialis[]" value="Tht">Tht <br>
                        <input type="checkbox" name="spesialis[]" value="Mata">Mata <br>
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