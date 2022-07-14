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
        <h3 align="center">Upload File Baru</h3>
        <br>
        <form action="upload_tambah_proses.php" method="POST" enctype="multipart/form-data">
            <table width="50%" align="center">
                <tr>
                    <td width="20%">Judul File</td>
                    <td width="80%"><input type="text" name="judul"></td>
                </tr>
                <tr>
                    <td valign="top">Keterangan</td>
                    <td><textarea name="keterangan" cols="50" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td>Upload File</td>
                    <td><input type="file" name="file"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Simpan" class="btn btn-primary btn-sm">
                        <input type="reset" value="Reset" class="btn btn-primary btn-sm">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>