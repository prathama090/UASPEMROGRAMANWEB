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
        <h3 align="center">Edit Data Pasien</h3>
        <br>
        <?php
        $id = $_GET['id'];
        $query = "SELECT * FROM tb_pasien WHERE id_pasien='$id'";
        $data = mysqli_query($koneksi, $query);
        $d = mysqli_fetch_array($data);
        ?>
        <form action="pasien_edit_proses.php" method="POST">
            <table align="center">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?= $d['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?= $d['alamat'] ?>"></td>
                </tr>
                <tr>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="tgl_lahir" value="<?= $d['tgl_lahir'] ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L"
                            <?php
                                if ($d['jenis_kelamin']=="L") {
                                    echo "checked";
                                }
                            ?> id="laki"><label for="laki">Laki-laki</label>
                        <input type="radio" name="jenis_kelamin" value="P"
                            <?php
                                if ($d['jenis_kelamin']=="P") {
                                    echo "checked";
                                }
                            ?> id="perempuan"><label for="perempuan">Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Dokter</td>
                    <td>
                        <select name="dokter" id="dokter">
                        <?php
                                $query_dokter = "SELECT * from tb_dokter";
                                $data_dokter = mysqli_query($koneksi, $query_dokter);
                                while ($d_dokter = mysqli_fetch_array($data_dokter)) {
                                    if($d['dokter']==$d_dokter['id_dokter']){
                                        $select="selected";
                                    }else{
                                     $select="";
                                    }
                                    echo "<option value='" . $d_dokter['id_dokter'] . "' $select>".$d_dokter['nama_dokter']."</option>";
                                   }
                        ?>               
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kamar</td>
                    <td>
                        <select name="kamar" id="kamar">
                        <?php
                                $query_kamar = "SELECT * from tb_kamar";
                                $data_kamar = mysqli_query($koneksi, $query_kamar);
                                while ($d_kamar = mysqli_fetch_array($data_kamar)) {
                                    if($d['kamar']==$d_kamar['id_kamar']){
                                        $select="selected";
                                    }else{
                                     $select="";
                                    }
                                    echo "<option value='" . $d_kamar['id_kamar'] . "' $select>".$d_kamar['nama_kamar']."</option>";
                                   }
                        ?>               
                        </select>
                    </td>
                </tr>
               
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Simpan">
                        <input type="hidden" name="id_pasien" value="<?= $d['id_pasien'] ?>">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>