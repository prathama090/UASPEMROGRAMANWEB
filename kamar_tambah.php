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
        <h3 align="center">Tambah Data Kamar</h3>
        <br>
        <form action="kamar_tambah_proses.php" method="POST">
            <table align="center">
                <tr>
                    <td>Nama Kamar</td>
                    <td><input type="text" name="nama_kamar"></td>
                </tr>
                <tr>
                    <td>Kapasitas</td>
                    <td><input type="number" name="kapasitas" min="1" max="7"></td>
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